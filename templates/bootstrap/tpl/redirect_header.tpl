<{if $redirect}>
  <link rel="stylesheet" type="text/css" href="<{$xoAppUrl}>class/jGrowl/jquery.jgrowl.min.css" />
  <script src="<{$xoAppUrl}>class/jGrowl/jquery.jgrowl.min.js"></script>
  <!--調用插件-->        
  <script type="text/javascript">            
    $(document).ready(function(){
      <{$redirect}>
    });                        
  </script>
<{/if}>