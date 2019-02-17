<?php

class EventManager extends Manager {

    function getAptEncoder(): AptEncoder {
        return new EventAptEncoder();
    }

    function getText(): string {
        return "Менеджер Событие\n";
    }

    function getBlogEncoder(): BlogEncoder {
        return new EventBlogEncoder();
    }
}