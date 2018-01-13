<?php
namespace App\Controllers;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = new Blog();
        $data['blogs'] = $blogs->index();
        $this->set($data);
        $this->render('blog', 'index');
    }

    public function create()
    {
        $this->render('blog', 'create');
    }

    public function store()
    {
        $blog = new Blog();
        if ($blog->store($_POST['title'], $_POST['slug'], $_POST['body'])) {
            header("Location:/");
        }
    }

    public function show($slug)
    {
        $blog = new Blog();
        $data['blog'] = $blog->show($slug[0]);
        $this->set($data);
        $this->render('blog', 'show');
    }

    public function edit($id)
    {
        $blog = new Blog();
        $data['blog'] = $blog->showBlog($id[0]);
        $this->set($data);
        $this->render('blog', 'edit');
    }

    public function update()
    {
        $blog = new Blog();
        if ($blog->update($_POST['id'], $_POST['title'], $_POST['slug'], $_POST['body'])) {
            header("Location:/");
        }
    }

    public function delete($id)
    {
        $blog = new Blog();
        if ($blog->delete($id[0])) {
            header("Location:/");
        }
    }

}