<?php

interface Content {
    public function show();
}

class Lesson implements Content {
    private $title;

    public function __construct($title) {
        $this->title = $title;
    }

    public function show() {
        return "- Lesson: " . $this->title . "\n";
    }
}

class Module implements Content {
    private $name;
    private $items = [];

    public function __construct($name) {
        $this->name = $name;
    }

    public function add(Content $item) {
        $this->items[] = $item;
    }

    public function show() {
        $output = "📘 Module: " . $this->name . "\n";
        foreach ($this->items as $item) {
            $output .= "   " . $item->show();
        }
        return $output;
    }
}
?>

?>