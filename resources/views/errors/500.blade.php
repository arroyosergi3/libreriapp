@extends('errors::minimal')

@section('title', __('Error del servidor'))
@section('code', '500')
@section('message', __('Error del servidor, por favor intenta de nuevo más tarde.'))
