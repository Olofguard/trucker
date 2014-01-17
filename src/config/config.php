<?php return array(

    /*
    |--------------------------------------------------------------------------
    | API endpoint URI
    |--------------------------------------------------------------------------
    |
    | This is the base URI that your REST API requests will be made to.
    | It should be in a format such as http://my-endpoint.com
    |
    */

    'base_uri' => null,

    /*
    |--------------------------------------------------------------------------
    | HTTP method request parameter
    |--------------------------------------------------------------------------
    |
    | This is a parameter to send with the request that will contain
    | a string disclosing the desired HTTP method ('put', 'post', 'patch',
    | 'delete').  If specified PUT, POST, PATCH and DELETE requests will
    | all be made as a POST and the given parameter will be added
    | with the http method as it's value. An example might be "_method".
    |
    | Otherwise a true PUT, POST, PATCH or DELETE request will be made
    |
    */

    'http_method_param' => null,

    /*
    |--------------------------------------------------------------------------
    | Scratch Disk location
    |--------------------------------------------------------------------------
    |
    | This is a filesystem path where temporary files could be written if needed.
    |
    | An example would be an Entity attribute that is a file (via base64 encoded
    | string).  The file would be written to the scratch disk before sending to
    | the endpoint, then sent with the request via HTTP chunked transfer encoding.
    |
    */

    'scratch_disk_location' => '/tmp',

    /*
    |--------------------------------------------------------------------------
    | API Transport Method
    |--------------------------------------------------------------------------
    |
    | This setting defines the transport method for data to and from the remote
    | API endpoint.  Supported methods are: json, xml.
    |
    */

    'transporter' => 'json',

    /*
    |--------------------------------------------------------------------------
    | Resource Identity Property
    |--------------------------------------------------------------------------
    |
    | This setting defines the response property that contains a remote resource's
    | unique identity property.
    |
    */

    'identity_property' => 'id',

    /*
    |--------------------------------------------------------------------------
    | API Collection Key
    |--------------------------------------------------------------------------
    |
    | When returning a collection of items ( /products for example ) if your API
    | provides the collection within a sub element of the response it can be defined
    | here.
    |
    */

    'collection_key' => null,

    /*
    |--------------------------------------------------------------------------
    | API Collection Search
    |--------------------------------------------------------------------------
    |
    | When making a request for a collection you may specify conditions similar
    | to a SQL WHERE clause.  These will be sent along with your request as an
    | array parameter which contains a grouping of key / values that define the
    | set of conditions.
    |
    */

    'search' => array(

        // The HTTP parameter which will contain the array of search conditions
        'container_parameter' => 'search',

        // The name of the parameter key used to identify an attribute
        // of a remote entity
        'property' => 'property',

        // Name of the parameter key used to specify a search rule operator
        // i.e.: = >= <= != LIKE
        'operator' => 'operator',

        // Name of the parameter key used to identify an entity value
        // when providing search conditions
        'value' => 'value',

        // Name of the parameter key used to identify how search criteria
        // should be combined when multiples are present
        'logical_operator' => 'logical_operator',

        // Name of the parameter key used to identify the property to order
        // search results by
        'order_by' => 'order_by',

        // Name of the parameter key used to identify the order direction
        // of search results when providing the 'order_by' parameter
        'order_dir' => 'order_dir',

        // Name of the parameter value for specifying "AND" search rule
        // combination behavior
        'and_operator' => 'AND',

        // Name of the parameter value for specifying "OR" search rule
        // combination behavior
        'or_operator' => 'OR',

        // Name of the parameter value for specifying ascending result ordering
        'order_dir_ascending' => 'ASC',

        // Name of the parameter value for specifying descending result ordering
        'order_dir_descending' => 'DESC',
    ),

);