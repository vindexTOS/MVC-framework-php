
<?php class App
{
    private $controller = 'Home';
    private $method = 'index';
    private function splitURL()
    {
        $URL = $_GET['url'] ?? 'home';
        $URL = explode('/', $_GET['url']);
        return $URL;
    }

    public function loadController()
    {
        $URL = $this->splitURL();
        $filename = '../app/controllers/' . ucfirst($URL[0]) . '.php';

        if (file_exists($filename)) {
            require $filename;
            $this->controller = ucfirst($URL[0]);
        } else {
            $filename = '../app/controllers/Notfound.php';
            require $filename;
            $this->controller = 'Notfound';
        }
        $controller = new $this->controller();

        call_user_func_array([$controller, $this->method], []);
    }
}
