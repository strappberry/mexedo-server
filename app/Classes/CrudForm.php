<?php

namespace App\Classes;

class CrudForm
{
    public static function form( $main, $tabs )
    {
        return compact( 'main', 'tabs' );
    }

    public static function tabs( ...$args )
    {
        return collect( $args )->mapWithKeys( function ( $tab ) {
            return [ $tab['identifier'] => $tab ];
        } )->toArray();
    }

    public static function tab( $identifier, $label, $fields, $notices = [] )
    {
        return compact( 'label', 'fields', 'identifier', 'notices' );
    }

    public static function fields( ...$args )
    {
        return collect( $args )->filter()->toArray();
    }
}
