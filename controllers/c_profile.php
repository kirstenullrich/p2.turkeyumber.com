<?php
class profile_controller extends base_controller {

    public function __construct() {
        parent::__construct();

        # Make sure user is logged in if they want to use anything in this controller
        if(!$this->user) {
            die("Members only. <a href='/users/login'>Login</a>");
        }
    }

      public function profile_display() {

            # Set up the View
            $this->template->nav = View::instance("v_profile_head");
            $this->template->nav = View::instance("v_posts_users_nav");
            $this->template->content = View::instance("v_profile_index");
            $this->template->title   = "Profile";


            $q = "SELECT * 
                FROM users
                WHERE user_id = ".$this->user->user_id;

            # Execute this query with the select_array method
            # select_array will return our results in an array and use the "users_id_followed" field as the index.
            # This will come in handy when we get to the view
            # Store our results (an array) in the variable $connections
            $connections = DB::instance(DB_NAME)->select_array($q, 'user_id_followed');

            # Pass data (users and connections) to the view
            $this->template->content->users       = $users;
            $this->template->content->connections = $connections;

            # Render the view
            echo $this->template;
        }

}
?>