<?php

class MeetingManager extends Manager {

    function getAptEncoder():AptEncoder {
        return new MeetingAptEncoder();
    }

    function getText(): string {
        return "Менеджер Встреча\n";
    }

    function getBlogEncoder(): BlogEncoder {
        return new MeetingBlogEncoder();
    }
}