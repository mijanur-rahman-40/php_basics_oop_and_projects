<?php

class Time
{
    public $timeAdded;

    public function __construct($time)
    {
        $this->timeAdded = $time;
    }

    public function getTime()
    {
        $time_message = '';
        $date_time_now = date("Y-m-d H:i:s");
        try {
            $start_date = new DateTime($this->timeAdded); // time of post
            $end_date = new DateTime($date_time_now); // current time
            $interval = $start_date->diff($end_date); // difference between dates
            if ($interval->y >= 1) {
                if ($interval == 1)
                    $time_message = $interval->y . ' year ago'; // 1 year ago
                else
                    $time_message = $interval->y . ' years ago'; // 1+ year ago
            } elseif ($interval->m >= 1) {
                if ($interval->d == 0) {
                    $days = ' ago';
                } elseif ($interval->d == 1) {
                    $days = $interval->d . ' day ago';
                } else {
                    $days = $interval->d . ' days ago';
                }

                if ($interval->m == 1) {
                    $time_message = $interval->m . ' month' . $days;
                } else {
                    $time_message = $interval->m . ' months' . $days;
                }
            } elseif ($interval->d >= 1) {
                if ($interval->d == 1) {
                    $time_message = 'Yesterday';
                } else {
                    $time_message = $interval->d . ' days ago';
                }
            } elseif ($interval->h >= 1) {
                if ($interval->h == 1) {
                    $time_message = $interval->h . ' hour ago';
                } else {
                    $time_message = $interval->h . ' hours ago';
                }
            } elseif ($interval->i >= 1) {
                if ($interval->i == 1) {
                    $time_message = $interval->i . ' minute ago';
                } else {
                    $time_message = $interval->i . ' minutes ago';
                }
            } else {
                if ($interval->s < 20) {
                    $time_message = 'Just now';
                } else {
                    $time_message = $interval->s . ' seconds ago';
                }
            }

        } catch (Exception $e) {
            echo $e;
        }
        return $time_message;
    }
}