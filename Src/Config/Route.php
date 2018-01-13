<?php
namespace App\Config;

class Route
{
    private $uri, $requestMethod, $action, $parameters, $prefix = '';
    protected const TRIM_CHARS = "/ \t\n\r\0\x0B";

    public function __construct($uri, $requestMethod)
    {
        $this->uri = trim(strtok($uri, '?'), Static::TRIM_CHARS);
        $this->requestMethod = $requestMethod;
    }

    /**
     * @param string $methodName
     * @param string $urlPattern
     * @param $action
     * @return $this
     */
    private function method(string  $methodName, string $urlPattern, $action)
    {
        $urlPattern = trim($this->prefix . $urlPattern,static::TRIM_CHARS);
        if ($this->requestMethod == $methodName){
            $request = preg_replace('/\{\w+?\}/','([\w\-]+)', $urlPattern);
            $requests = preg_replace('/\//', '\/', $request);
            preg_match('/^' . $requests . '$/', $this->uri, $matches);

            if ($matches){
                $this->action = $action;
                array_shift($matches);
                $this->parameters = $matches;
            }
        }
        return $this;
    }

    /**
     * @param string $prefix
     * @param callable $closure
     * @return $this
     */
    public function group(string  $prefix, callable $closure)
    {
        $prefix = $this->prefix . trim($prefix, Static::TRIM_CHARS);

        if (strpos($this->uri, $prefix) === 0){
            $this->prefix = $prefix. '/';
            call_user_func($closure, $this->prefix);
        }
        return $this;
    }

    /**
     * @param string $urlPattern
     * @param $controllerMethod
     * @return Route
     */
    public function get(string $urlPattern, $controllerMethod)
    {
        return $this->method('GET', $urlPattern, $controllerMethod);
    }

    /**
     * @param string $urlPattern
     * @param $controllerMethod
     * @return Route
     */
    public function post(string $urlPattern, $controllerMethod)
    {
        return $this->method('POST', $urlPattern, $controllerMethod);
    }

    /**
     * @return bool|mixed
     */
    public function action()
    {
        if ($this->action){
            if (is_callable($this->action)){
                return call_user_func($this->action);
            } else {
                $controllerMethod = explode('@', $this->action);
                $controller = $controllerMethod[0];
                $method = $controllerMethod[1];
            }
            return (new $controller())->$method($this->parameters);
        } else {
            return false;
        }
    }

}