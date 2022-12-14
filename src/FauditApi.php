<?php
declare(strict_types=1);

namespace FauditApi;

class FauditApi extends FauditApiBase {
    
    private $_api_key       =   '';
    
    /**
     * 
     * @param string $api_key
     */
    function __construct(string $api_key){
        parent::__construct();
        $this->_api_key     =   $api_key;
    }
    
    /**
     * Set the connection and response timeouts.
     *
     * @param int $connectionTimeout
     * @param int $timeout
     */
    public function setTimeouts(int $connectionTimeout, int $timeout): void
    {
        $this->connectionTimeout = $connectionTimeout;
        $this->timeout = $timeout;
    }
    
    /**
     * Set the number of times to retry on error and how long between each.
     *
     * @param int $maxRetries
     * @param int $retriesDelay
     */
    public function setRetries(int $maxRetries, int $retriesDelay): void
    {
        $this->maxRetries = $maxRetries;
        $this->retriesDelay = $retriesDelay;
    }
    
    /**
     * @param bool $value
     */
    public function setDecodeJsonAsArray(bool $value): void
    {
        $this->decodeJsonAsArray = $value;
    }
    
    /**
     * @param array $proxy
     */
    public function setProxy(array $proxy): void
    {
        $this->proxy = $proxy;
    }
    
    public function get(string $url, array $parameters = [])
    {
        return $this->http('GET', $url, $parameters,$this->_api_key, false);
    }
    
    public function post(string $url, array $parameters = [], bool $json = false ) {
        return $this->http('POST', $url, $parameters,$this->_api_key, $json);
    }
    
    function newaudit($username='',$twitter_id='',$refresh=0)
    {
        $data                   =   [];
        if($username != '')
            $data['username']   =   $username;
        else if($twitter_id != '') 
            $data['twitter_id'] =   $twitter_id;
        
        if($refresh)
            $data['refresh']    =   $refresh;

        return $this->post($this->newAuditApiURL(),$data);
    }
    
    function bulkaudit($username= '',$twitter_id='',$refresh = 0){
        $data                   =   [];
        if($username != '')
            $data['username']   =   $username;
        else if($twitter_id != '')
            $data['twitter_id'] =   $twitter_id;

        if($refresh)
            $data['refresh']    =   $refresh;

        return $this->post($this->bulkauditApiURL(),$data);
    }
    
    function auditstatus($audit_id){
        $data = [];
        if($audit_id != '')
            $data['audit_id']   =   $audit_id;

        return $this->post($this->auditstatusApiURL(),$data);
    }
}