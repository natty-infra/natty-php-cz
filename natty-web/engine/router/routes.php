<?php
  include "router.php";

  Router::init(new Handler("NotFoundHandler", HandlerType::View));

  Router::map(["", "/"], "Home", HandlerType::View);
  Router::map("/contact", "Contact", HandlerType::View);
  Router::map("/aboutme", "AboutMe", HandlerType::View);
  Router::map("/projects", "Projects", HandlerType::View);
  Router::map("/new", "NewsUpdates", HandlerType::View);
  Router::map("/acknowledgements", "Acknowledgements", HandlerType::View);
  Router::map("/botdiril", "Botdiril", HandlerType::View);
  Router::map("/tweets", "Tweets", HandlerType::View);
  Router::map("/supportme", "SupportMe", HandlerType::View);


  Router::map("/apps-download", "https://apps.natty.sh/", HandlerType::Redirect);
  Router::map("/pluto-quick-start", "https://github.com/plutoengine/plutoengine-basic-demo/archive/refs/heads/main.zip", HandlerType::Redirect);
?>
