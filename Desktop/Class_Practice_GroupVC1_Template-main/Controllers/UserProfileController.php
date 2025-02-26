<?php
class UserController extends BaseController {
    public function profile() {
        $this->view('Userprofile/userprofile');
    }
}