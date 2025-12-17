<?php

interface Observer {
    public function update($message);
}

interface Subject {
    public function attach(Observer $observer);
    public function detach(Observer $observer);
    public function notify($message);
}

class Student implements Observer {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function update($message) {
        return $this->name . " received notification: " . $message . "\n";
    }
}

class CourseSubject implements Subject {
    private $observers = [];

    public function attach(Observer $observer) {
        $this->observers[] = $observer;
    }

    public function detach(Observer $observer) {
        $this->observers = array_filter($this->observers, fn($obs) => $obs !== $observer);
    }

    public function notify($message) {
        $response = "";
        foreach ($this->observers as $observer) {
            $response .= $observer->update($message);
        }
        return $response;
    }
}
?>
