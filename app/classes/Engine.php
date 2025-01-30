<?php

namespace app\classes;
use Exception;

class Engine
{

    private ?string $layout;
    private ?string $content;
    private array $data;

    /**
     * @throws Exception
     */
    public function render( string $template, array $data = [] ): false|string {
        $templatePath = str_replace('.', '/', $template);

        $template = dirname(__FILE__, 2) . DIRECTORY_SEPARATOR ."views/$templatePath.php";

        if (!file_exists($template)) {
            $rootPath = dirname(__FILE__, 3);
            $template = str_replace($rootPath, '', $template);
            throw new Exception("Template '$template' does not exist");
        }

        ob_start();
        extract($data);
        require $template;
        $contents = ob_get_contents();
        ob_end_clean();

        if(!empty($this->layout)) {
            /* partial content that must be included in $this->layout (base-layout.php) */
            $this->content = $contents;
            $data = array_merge($this->data, $data);
            $layout = $this->layout;
            $this->layout = null;
            return $this->render($layout, $this->data);
        }

        return $contents;
    }

    private function loadContent(): string {
        return !empty($this->content) ? $this->content : false;
    }

    private function extends( string $base_template, array $data = [] ): void {
        $this->layout = $base_template;
        $this->data = $data;
    }
}