<?php include "setting.php" ?>
<html class="theme-next mist use-motion" lang="zh-Hans"><head><meta name="generator" content="Hexo 3.9.0">
  <meta name="shenma-site-verification" content="7bb3c340436cd21107cf58d10b31e859_1573224253"> 
  <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
  <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
  <link rel="stylesheet" type="text/css" href="https://c.mipcdn.com/static/v2/mip.css">
  <meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="theme-color" content="#222">
<script src="//tajs.qq.com/stats?sId=66463417"></script><script src=<?php echo $baidu_push ?>></script><script>
  var _hmt = _hmt || [];
  (function() {
    var hm = document.createElement("script");
    hm.src = <?php echo $baidu_push ?>;
    var s = document.getElementsByTagName("script")[0]; 
    s.parentNode.insertBefore(hm, s);
  })();
</script>
<script>
	(function(){
		var canonicalURL, curProtocol;
		//Get the <link> tag
		var x=document.getElementsByTagName("link");
		//Find the last canonical URL
		if(x.length > 0){
			for (i=0;i<x.length;i++){
				if(x[i].rel.toLowerCase() == 'canonical' && x[i].href){
					canonicalURL=x[i].href;
				}
			}
		}
		//Get protocol
	    if (!canonicalURL){
	    	curProtocol = window.location.protocol.split(':')[0];
	    }
	    else{
	    	curProtocol = canonicalURL.split(':')[0];
	    }
	    //Get current URL if the canonical URL does not exist
	    if (!canonicalURL) canonicalURL = window.location.href;
	    //Assign script content. Replace current URL with the canonical URL
    	!function(){var e=/([http|https]:\/\/[a-zA-Z0-9\_\.]+\.baidu\.com)/gi,r=canonicalURL,t=document.referrer;if(!e.test(r)){var n=(String(curProtocol).toLowerCase() === 'https')?"https://sp0.baidu.com/9_Q4simg2RQJ8t7jm9iCKT-xh_/s.gif":"//api.share.baidu.com/s.gif";t?(n+="?r="+encodeURIComponent(document.referrer),r&&(n+="&l="+r)):r&&(n+="?l="+r);var i=new Image;i.src=n}}(window);})();
</script>


<meta http-equiv="Cache-Control" content="no-transform">
<meta http-equiv="Cache-Control" content="no-siteapp">

  
  <link href="/lib/fancybox/source/jquery.fancybox.css?v=2.1.5" rel="stylesheet" type="text/css">







<link href="/lib/font-awesome/css/font-awesome.min.css?v=4.6.2" rel="stylesheet" type="text/css">

<link href="/css/main.css?v=5.1.4" rel="stylesheet" type="text/css">


  <link rel="apple-touch-icon" sizes="180x180" href="/images/apple-touch-icon-next.png?v=5.1.4">


  <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon-32x32-next.png?v=5.1.4">


<link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-16x16-next.png?v=5.1.4">
<link rel="mask-icon" href="/images/logo.svg?v=5.1.4" color="#222">
<meta name="keywords" content=<?php echo $keywords ?>>
<meta property="og:type" content="website">
<meta property="og:title" content="<?php echo $title ?>">
<meta property="og:url" content=<?php echo $home_link ?>>
<meta property="og:site_name" content="<?php echo $title ?>">
<meta property="og:locale" content="zh-Hans">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="<?php echo $title ?>">



<script type="text/javascript" id="hexo.configurations">
  var NexT = window.NexT || {};
  var CONFIG = {
    root: '/',
    scheme: 'Mist',
    version: '5.1.4',
    sidebar: {"position":"left","display":"post","offset":12,"b2t":false,"scrollpercent":false,"onmobile":false},
    fancybox: true,
    tabs: true,
    motion: {"enable":true,"async":false,"transition":{"post_block":"fadeIn","post_header":"slideDownIn","post_body":"slideDownIn","coll_header":"slideLeftIn","sidebar":"slideUpIn"}},
    duoshuo: {
      userId: '0',
      author: '站长'
    },
    algolia: {
      applicationID: '',
      apiKey: '',
      indexName: '',
      hits: {"per_page":10},
      labels: {"input_placeholder":"Search for Posts","hits_empty":"We didn't find any results for the search: ${query}","hits_stats":"${hits} results found in ${time} ms"}
    }
  };
</script>
<link rel="canonical" href=<?php echo $$home_link ?>>
<title><?php echo $title ?></title>
  








<style type="text/css">.fancybox-margin{margin-right:0px;}</style></head>

<body itemscope="" itemtype="http://schema.org/WebPage" lang="zh-Hans">
  
  
    
  

  <div class="container sidebar-position-left 
  page-home">
    <div class="headband"></div>

    <header id="header" class="header" itemscope="" itemtype="http://schema.org/WPHeader">
      <div class="header-inner"><div class="site-brand-wrapper">
  <div class="site-meta ">
    

    <div class="custom-logo-site-title">
      <a href="/" class="brand" rel="start" style="opacity: 1;">
        <span class="logo-line-before"><i class="" style="transform: translateX(100%);"></i></span>
        <span class="site-title" style="opacity: 1; top: 0px;"><?php echo $title ?></span>
        <span class="logo-line-after"><i class="" style="transform: translateX(-100%);"></i></span>
      </a>
    </div>
      
        <h1 class="site-subtitle" itemprop="description" style="opacity: 1; top: 0px;"></h1>
      
  </div>

  <div class="site-nav-toggle">
    <button>
      <span class="btn-bar"></span>
      <span class="btn-bar"></span>
      <span class="btn-bar"></span>
    </button>
  </div>
</div>

<nav class="site-nav">
  

  
    <ul id="menu" class="menu">
      
        
        <li class="menu-item menu-item-home menu-item-active" style="opacity: 1; transform: translateY(0px);">
          <a href="/" rel="section">
            
              <i class="menu-item-icon fa fa-fw fa-home"></i> <br>
            
            <?php echo $home ?>
          </a>
        </li>
      
        
        <li class="menu-item menu-item-tags" style="opacity: 1; transform: translateY(0px);">
          <a href="/tags/" rel="section">
            
              <i class="menu-item-icon fa fa-fw fa-tags"></i> <br>
            
            <?php echo $tages ?>
          </a>
        </li>
      
        
        <li class="menu-item menu-item-categories" style="opacity: 1; transform: translateY(0px);">
          <a href="/categories/" rel="section">
            
              <i class="menu-item-icon fa fa-fw fa-th"></i> <br>
            
            <?php echo $archives ?>
          </a>
        </li>
      
        
        <li class="menu-item menu-item-archives" style="opacity: 1; transform: translateY(0px);">
          <a href="/archives/" rel="section">
            
              <i class="menu-item-icon fa fa-fw fa-archive"></i> <br>
            
             <?php echo $friends ?>
          </a>
        </li>
      
        
        <li class="menu-item menu-item-friends" style="opacity: 1; transform: translateY(0px);">
          <a href="/friends/" rel="section">
            
              <i class="menu-item-icon fa fa-fw fa-users"></i> <br>
            
            <?php echo $line ?>
          </a>
        </li>
      

      
    </ul>
  

  
</nav>



 </div>
    </header>

    <main id="main" class="main">
      <div class="main-inner">
        <div class="content-wrap">
          <div id="content" class="content">
            
  <section id="posts" class="posts-expand">
    
      

  

  
  
  
<?php 
$article_link = '"http://mryan05.coding.me/2019/08/16/richanganpai.html"'
$Software_name = 'a'
echo '
  <article class="post post-type-normal" itemscope="" itemtype="http://schema.org/Article">

  <div class="post-block" style="opacity: 1; display: block;">
    <link itemprop="mainEntityOfPage" href=$article_link>

    <span hidden="" itemprop="author" itemscope="" itemtype="http://schema.org/Person">
      <meta itemprop="description" content="">
      <meta itemprop="image" content="/images/avatar.gif">
    </span>

    <span hidden="" itemprop="publisher" itemscope="" itemtype="http://schema.org/Organization">
      <meta itemprop="name" content="<?php echo $title ?>">
    </span>

    
      <header class="post-header" style="opacity: 1; display: block; transform: translateY(0px);">

        
        
          <h2 class="post-title" itemprop="name headline">
                
                <a rel="nofollow" class="post-title-link" href="/2019/08/16/richanganpai.html" itemprop="url">$Software_name</a></h2>
        

        <div class="post-meta">
          <span class="post-time">
            
              <span class="post-meta-item-icon">
                <i class="fa fa-calendar-o"></i>
              </span>
              
                <span class="post-meta-item-text">发表于</span>
              
              <time title="$dateCreated" itemprop="dateCreated datePublished" datetime="$datetime">
                $datetime
              </time>
            

            

            
            
          
            <span class="post-category">
            
              <span class="post-meta-divider">|</span>
            
              <span class="post-meta-item-icon">
                <i class="fa fa-folder-o"></i>
              </span>
              
                <span class="post-meta-item-text">分类于</span>
              
              
                <span itemprop="about" itemscopa13788045733="" e="" itemtype="http://schema.org/Thing">
                  <a href="/categories/任务/" itemprop="url" rel="index">
                    <span itemprop="name">任务</span>
                  </a>
                </span>

                
                
              
            </span>
          

          
            
          

          
          

          

          

          

        </span></div>
      </header>
    

    
    
    
    <div class="post-body" itemprop="articleBody" style="opacity: 1; display: block; transform: translateY(0px);">

      
      

      
        
          
          现已全部结束

          
          <!--noindex-->
          <div class="post-button text-center">
            <a class="btn" href="/2019/08/16/richanganpai.html#more" rel="contents">
              阅读全文 »
            </a>
          </div>
          <!--/noindex-->
        
      
    </div>
    
    
    

    

    

    

    <footer class="post-footer">
      

      

      

      
      
        <div class="post-eof"></div>
      
    </footer>
  </div>
  
  
  
  </article>'?>



    
    


    
  </section>

  


          </div>
          


          

        </div>
        
          
  
  <div class="sidebar-toggle">
    <div class="sidebar-toggle-line-wrap">
      <span class="sidebar-toggle-line sidebar-toggle-line-first"></span>
      <span class="sidebar-toggle-line sidebar-toggle-line-middle"></span>
      <span class="sidebar-toggle-line sidebar-toggle-line-last"></span>
    </div>
  </div>

  <aside id="sidebar" class="sidebar">
    
    <div class="sidebar-inner">

      

      

      <section class="site-overview-wrap sidebar-panel sidebar-panel-active">
        <div class="site-overview" style="max-height: 682px;">
          <div class="site-author motion-element" itemprop="author" itemscope="" itemtype="http://schema.org/Person">
            
              <p class="site-author-name" itemprop="name">Mr.yan</p>
              <p class="site-description motion-element" itemprop="description"></p>
          </div>

          <nav class="site-state motion-element">

            
              <div class="site-state-item site-state-posts">
              
                <a href="/archives/">
              
                  <span class="site-state-item-count">10</span>
                  <span class="site-state-item-name">日志</span>
                </a>
              </div>
            

            
              
              
              <div class="site-state-item site-state-categories">
                <a href="/categories/index.html">
                  <span class="site-state-item-count">9</span>
                  <span class="site-state-item-name">分类</span>
                </a>
              </div>
            

            
              
              
              <div class="site-state-item site-state-tags">
                <a href="/tags/index.html">
                  <span class="site-state-item-count">13</span>
                  <span class="site-state-item-name">标签</span>
                </a>
              </div>
            

          </nav>

          

          
            <div class="links-of-author motion-element">
                
                  <span class="links-of-author-item">
                    <a href="https://github.com/Mryan2005" target="_blank" title="GitHub">
                      
                        <i class="fa fa-fw fa-github"></i>GitHub</a>
                  </span>
                
            </div>
          

          
          

          
          

          

        </div>
      </section>

      

      

    </div>
  </aside>


        
      </div>
    </main>

    <footer id="footer" class="footer">
      <div class="footer-inner">
        <div class="copyright">© <span itemprop="copyrightYear">2020</span>
  <span class="with-love">
    <i class="fa fa-user"></i>
  </span>
  <span><a rel="nofollow" href="https://www.travis-ci.com/Mryan2005/mryan2005.github.io">build</a></span>
  ｜
  <span class="with-love">
    <i class="fa fa-code"></i>
  </span>
</div>


  <div class="powered-by">基于Hexo主题 — NexT.Mist v5.1.4开发</div>




        




  <script type="text/javascript">
    (function() {
      var hm = document.createElement("script");
      hm.src = "//tajs.qq.com/stats?sId=66463417";
      var s = document.getElementsByTagName("script")[0];
      s.parentNode.insertBefore(hm, s);
    })();
  </script>




        
      </div>
    </footer>

    
      <div class="back-to-top">
        <i class="fa fa-arrow-up"></i>
        
      </div>
    

    

  </div>

  

<script type="text/javascript">
  if (Object.prototype.toString.call(window.Promise) !== '[object Function]') {
    window.Promise = null;
  }
</script>









  












  
  
    <script type="text/javascript" src="/lib/jquery/index.js?v=2.1.3"></script>
  

  
  
    <script type="text/javascript" src="/lib/fastclick/lib/fastclick.min.js?v=1.0.6"></script>
  

  
  
    <script type="text/javascript" src="/lib/jquery_lazyload/jquery.lazyload.js?v=1.9.7"></script>
  

  
  
    <script type="text/javascript" src="/lib/velocity/velocity.min.js?v=1.2.1"></script>
  

  
  
    <script type="text/javascript" src="/lib/velocity/velocity.ui.min.js?v=1.2.1"></script>
  

  
  
    <script type="text/javascript" src="/lib/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
  


  


  <script type="text/javascript" src="/js/src/utils.js?v=5.1.4"></script>

  <script type="text/javascript" src="/js/src/motion.js?v=5.1.4"></script>



  
  

  

  


  <script type="text/javascript" src="/js/src/bootstrap.js?v=5.1.4"></script>



  


  




	





  













  





  

  

  

  
  

  

  

  



<div class="xl-chrome-ext-bar" id="xl_chrome_ext_{4DB361DE-01F7-4376-B494-639E489D19ED}" style="display: none;">
      <div class="xl-chrome-ext-bar__logo"></div>

      <a id="xl_chrome_ext_close" href="javascript:;" class="xl-chrome-ext-bar__close"></a>
    </div></body></html>
