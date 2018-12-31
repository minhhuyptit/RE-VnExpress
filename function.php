<?php
    function getContent($link = 'https://vnexpress.net/the-thao'){
        $contentSite = file_get_contents($link);

        $matches = array();
        $pattern = '#id="news_home">(.*)<div class="view_by_date".*#imsU';
        preg_match($pattern, $contentSite, $matches);
        preg_match_all('#.*class="list_news".*class="title_news".*<a.*>(.*)</a>.*#imsU', $matches[1], $name);
        preg_match_all('#.*class="list_news".*<img.*data-original="(.*)".*#imsU', $matches[1], $image);
        preg_match_all('#.*class="list_news".*<a href="(.*)".*#imsU', $matches[1], $linkNews);
        preg_match_all('#.*class="list_news".*class="description">(.*)</h4>.*#imsU', $matches[1], $description);

        $xhtml = '<ol>';
        for ($i = 0; $i < 5; $i++) { 
          $xhtml .= '<li>
                    <div class="media">
                      <a class="pull-left" href="'.$linkNews[1][$i].'">
                        <img class="media-object" src="'.$image[1][$i].'">
                      </a>
                      <div class="media-body">
                          <h4 class="media-heading"><a href="'.$linkNews[1][$i].'">'.$name[1][$i].'</a></h4>
                          '.$description[1][$i].'
                      </div>
                    </div>
                  </li><br>';
        }
        $xhtml .= '</ol>';
        return $xhtml;
    }

    function getContent2($link = 'https://vnexpress.net/the-thao'){
        $contentSite = file_get_contents($link);

        $matches = array();
        $pattern = '#id="news_home">(.*)<div class="view_by_date".*#imsU';
        preg_match($pattern, $contentSite, $matches);
        $pattern = '#.*class="thumb_art">\s*<a.*href="(.*)".*>\s*<img.*data-original="(.*)".*title="(.*)".*class="description">(.*)</h4>#imsU';
        preg_match_all($pattern, $matches[1], $result);


        array_shift($result); //Bỏ phần tử đầu vì nó là phần toàn bộ của preg_match

        $xhtml = '<ol>';
        for ($i = 0; $i < 5; $i++) { 
          $xhtml .= '<li>
                    <div class="media">
                      <a class="pull-left" href="'.$result[0][$i].'">
                        <img class="media-object" src="'.$result[1][$i].'">
                      </a>
                      <div class="media-body">
                          <h4 class="media-heading"><a href="'.$result[0][$i].'">'.$result[2][$i].'</a></h4>
                          '.$result[3][$i].'
                      </div>
                    </div>
                  </li><br>';
        }
        $xhtml .= '</ol>';
        return $xhtml;
    }
?>