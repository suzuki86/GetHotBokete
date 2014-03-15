<?php

class Bokete{
  private $url = 'http://bokete.jp/boke/hot';

  public function getHotBoke(){
    $raw_html = file_get_contents($this->url);
    preg_match_all('/boke-entry-info">(.*?)<a href="\/boke\/([0-9]+?)"/s', $raw_html, $matches);
    return $matches[2][mt_rand(0, count($matches[2]) - 1)];
  }
}
