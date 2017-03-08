<!-- Footer -->
<div id="footer">
<div class="row">
<div class="container">
<div class="col-sm-6">
<h3>Site Menu</h3>
<ul class="links">
<li class="{{Request::is('index')? "active":""}}"><a href="{{route('index')}}"><span>Home</span></a></li>
<li class="{{Request::is('about')? "active":""}}"><a href="{{route('about')}}"><span>About</span></a></li>
<li class="{{Request::is('destinations')? "active":""}}"><a href="{{route('destinations')}}"><span>Destinations</span></a></li>
<li class="{{Request::is('adventures')? "active":""}}"><a href="{{route('adventures')}}"><span>Adventures</span></a></li>
<li class="{{Request::is('fitness')? "active":""}}"><a href="{{route('fitness')}}"><span>Fitness</span></a></li>
<li class="{{Request::is('gallery')? "active":""}}"><a href="{{route('gallery')}}"><span>Gallery</span></a></li>
<li class="{{Request::is('contact')? "active":""}}"><a href="{{route('contact')}}"><span>Contact</span></a></li>
</ul>
</div>
<div class="col-sm-6" >
<h3 class="text-center">Get In Touch</h3>
<form class="form-horizontal">
<div class="form-group">
<input type="text" name="name" class="form-control" id="name" placeholder="Name" />
</div>
<div class="form-group">
<input type="email" name="email" class="form-control" id="email" placeholder="Email" />
</div>
<div class="form-group">
<textarea name="message" id="message" placeholder="Message" class="form-control"></textarea>
</div>
<div class="form-group">
<button type="submit" class="btn btn-success btn-block">Send Message</button>
</div>
</form>
</div>
</div>
</div>
<div class="container">

<!-- Icons -->
<ul class="icons">
<li><a href="https://www.facebook.com/theadventuroustravelers/" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
<li><a href="https://www.instagram.com/adventuroustravelers/" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
</ul>

<!-- Copyright -->
<div class="copyright">
<ul class="menu">
<li>&copy; Untitled. All rights reserved</li>
</ul>
</div>
</div>

</div>
