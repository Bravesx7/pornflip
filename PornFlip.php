<?php
class PornFlip
{
    public function __construct($username, $password, $cookie_file)
    {
        $this->username = $username;
        $this->password = $password;
        $this->cookie_file = $cookie_file;
    }
    public function request($action, $queries = null, $post = false)
    {
        $cp = curl_init('https://www.pornflip.com/' . $action);
        curl_setopt($cp, CURLOPT_RETURNTRANSFER, true);
        if ($post === true) {
            curl_setopt($cp, CURLOPT_POST, true);
        }
        if (!is_null($queries)) {
            curl_setopt($cp, CURLOPT_POSTFIELDS, $queries);
        }
        curl_setopt($cp, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.193 Safari/537.36');
        curl_setopt($cp, CURLOPT_COOKIEJAR, $this->cookie_file);
        curl_setopt($cp, CURLOPT_COOKIEFILE, $this->cookie_file);
        return curl_exec($cp);
        curl_close($cp);
    }
    public function login()
    {
        return json_decode($this->request('account/login', ['back_url' => '/', 'login' => $this->username, 'password' => $this->password]), true);
    }
    public function getDownloadURLs($videourl)
    {
        return json_decode($this->request('v/download?v=' . explode('/', $videourl)[3]), true);
    }
    function seacrh($query, $page = 1)
    {
        $request = $this->request('sq?q=' . urlencode($query) . '&page=' . $page);
        $dom = new DOMDocument;
        $dom->loadHTML('<?xml encoding="UTF-8">' . $request);
        $xpath = new DOMXPath($dom);
        $query = $xpath->query('//div[@data-rotate="preview"]');
        if ($query->length > 0) {
            $xpath = new DOMXPath($dom);
            $results['count'] = $query->length;
            foreach ($query  as $key => $preview) {
                $results[$key]['title'] = $preview->getElementsByTagName('a')[1]->nodeValue;
                $results[$key]['url'] = 'https://www.pornflip.com' . trim($preview->getElementsByTagName('a')[1]->attributes[0]->nodeValue);
                $results[$key]['img'] = $preview->getElementsByTagName('img')[0]->attributes[1]->nodeValue;

                foreach ($preview->getElementsByTagName('span') as $span) {
                    $results[$key][trim($span->attributes[0]->nodeValue)] = trim($span->nodeValue);
                }
            }
            return $results;
        } else {
            return false;
        }
    }
}
