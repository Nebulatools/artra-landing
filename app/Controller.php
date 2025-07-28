<?php
class Controller {
	protected function render($page, $title = '') {
		$data['title'] = $title;
		echo view('layouts/head', $data);
		echo view('layouts/header');
		echo view($page);
		echo view('layouts/footer');
	}
	public function index() {
		/* return redirect()->to('home'); */
		$this->render('home', 'Home');
	}
	public function home() {
		$this->render('home', 'Home');
	}
	public function artworks() {
		$this->render('artworks', 'Artworks');
	}
	public function artists() {
		$this->render('artists', 'Artists');
	}
	public function hwdi() {
		$this->render('hwdi', 'How We Do It');
	}
	public function catalogue() {
		$this->render('catalogue', 'Catalogue');
	}
	public function frame_detail() {
		$this->render('frame_detail', 'Frame Detail');
	}
	public function frames() {
		$this->render('frames', 'Frames');
	}
	public function gallery() {
		$this->render('gallery', 'Gallery');
	}
	public function blog() {
		$this->render('blog', 'Blog');
	}
}
?>