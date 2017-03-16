<!DOCTYPE html>
<html lang="en">
     @include('user.includes.css')
<body>
    <header id="header"><!--header--> 
    @include('user.includes.menu')
    </header><!--/header-->
    
    @yield('content')
    
    <footer id="footer"><!--Footer-->@include('user.includes.footer')
        
    </footer><!--/Footer-->
    

  
  
    @include('user.includes.js')
</body>
</html>