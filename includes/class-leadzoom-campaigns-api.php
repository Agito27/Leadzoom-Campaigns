<?php

/**
 * 
 */



 class Leadzoom_Campaigns_API {

   /**
    *   
    */
   private $routes = [];

   

   public function __construct()
   {

   }

   /**
    * 
    */
   public function load()
   {
      foreach ( $this->routes as $route ) {
         if( $route['type'] == 'field' ) {
            register_rest_field($route['object_type'] ,$route['attribute'] ,$route['args'] );
         }

         if( $route['type'] == 'route') {
            register_rest_route($route['namespace'],$route['route'], $route['args']);
         }
      }
   }

   /**
    * 
    */
   public function register_api( $type, $namespace, $route, $args )
   {
      $this->routes[] = [
         'type'      => $type,
         'namespace' => $namespace,
         'route'     => $route,
         'args'      => $args
      ];
   }

   public function check()
   {
      var_dump($this->routes);
   }



}  