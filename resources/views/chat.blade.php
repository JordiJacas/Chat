@extends('layouts.master')

@section('content')
{{ Breadcrumbs::render('chat') }}
<script src="https://use.fontawesome.com/45e03a14ce.js"></script>
<form id="formulario" action="{{'chat'}}">
         {{csrf_field()}}
<div class="main_section">
   <div class="container">
      <div class="chat_container">
         <div class="col-sm-3 chat_sidebar">
         <div class="row">
            <div class="dropdown all_conversation">
               <i class="fa fa-weixin" aria-hidden="true"></i>
               Chat Room
            </div>
            <div class="member_list">
               <ul class="list-unstyled">
                  <li onclick="printar()" class="left clearfix">
                     <span class="chat-img pull-left">
                     <img src="{{ asset('img/avatar.png') }}" alt="User Avatar" class="img-circle">
                     </span>
                     <div class="chat-body clearfix">
                        <div class="header_sec">
                           <strong id="room1" name="Alfonso V" class="primary-font">Alfonso V</strong>
                           <strong class="pull-right">09:30</strong>
                        </div>
                        <div class="contact_sec">
                           <strong class="primary-font">Ayuntamiento Cornella</strong>
                        </div>
                     </div>
                  </li>
                  <!--<li onclick="accederChatroom()" class="left clearfix">
                     <span class="chat-img pull-left">
                     <img src="{{ asset('img/avatar.png') }}" alt="User Avatar" class="img-circle">
                     </span>
                     <div class="chat-body clearfix">
                        <div class="header_sec">
                           <strong id="room2" name="Juana I" class="primary-font">Juana I</strong> <strong class="pull-right">
                           09:30</strong>
                        </div>
                        <div class="contact_sec">
                           <strong class="primary-font">Ayuntamiento Cornella</strong>
                        </div>
                     </div>
                  </li> 
                  <li onclick="accederChatroom()" class="left clearfix">
                     <span class="chat-img pull-left">
                     <img src="{{ asset('img/avatar.png') }}" alt="User Avatar" class="img-circle">
                     </span>
                     <div class="chat-body clearfix">
                        <div class="header_sec">
                           <strong id="room3" name="Amadeo I" class="primary-font">Amadeo I</strong> <strong class="pull-right">
                           09:30</strong>
                        </div>
                        <div class="contact_sec">
                           <strong class="primary-font">Ayuntamiento Cornella</strong>
                        </div>
                     </div>
                  </li>
                  <li onclick="accederChatroom()" class="left clearfix">
                     <span class="chat-img pull-left">
                     <img src="{{ asset('img/avatar.png') }}" alt="User Avatar" class="img-circle">
                     </span>
                     <div class="chat-body clearfix">
                        <div class="header_sec">
                           <strong id="room4" name="Luis I" class="primary-font">Luis I</strong> <strong class="pull-right">
                           09:30</strong>
                        </div>
                        <div class="contact_sec">
                           <strong class="primary-font">Ayuntamiento Cornella</strong>
                        </div>
                     </div>
                  </li>--> 
               </ul>
            </div></div>
         </div>
         <!--chat_sidebar-->
         
         
         <div class="col-sm-9 message_section">
         <div class="row">
         <div class="new_message_head">
         <div class="pull-left">Chat</div><div class="pull-right"><div class="dropdown">
  <button class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ajustes
    <span class="caret"></span>
  </button>
  <!--<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
      <li><a href="#" onclick="crearChatroom()">Nueva ChatRoom</a></li>
      <li><a href="#">Invitar</a></li>
      <li><a href="#">Salir</a></li>
  </ul>-->
</div></div>
         </div><!--new_message_head-->
         
         <div class="chat_area">
         <ul id="ul" class="list-unstyled">
	         <li class="left clearfix">
	            <span class="chat-img1 pull-left">
	            	<img src="{{ asset('img/avatar.png') }}" alt="User Avatar" class="img-circle">
                  BotAyuntamiento
	            </span>
		        <div class="chat-body1 clearfix">
	              <br><p>Bienvenidos a la ChatRoom Alfonso V</p>
		           <div class="chat_time pull-right">09:30</div>
	            </div>
	        </li>
         </ul>
         </div><!--chat_area-->
          <div class="message_write">
            <textarea name="mensaje" id="mensaje" class="form-control" placeholder="Escribe un mensaje"></textarea>
            <div class="clearfix"></div>
            <div class="chat_bottom">
            <button id="send" name="mysubmit" type="submit" class="pull-right btn btn-success">Send</button>
         </div>
         </div>
         </div>
         </div> <!--message_section-->
      </div>
   </div>
</div>
<form>
@stop