




<!DOCTYPE html>
<html class="   ">
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# object: http://ogp.me/ns/object# article: http://ogp.me/ns/article# profile: http://ogp.me/ns/profile#">
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    
    <title>CodeIgniter/system/database/drivers/sqlsrv/sqlsrv_result.php at develop · EllisLab/CodeIgniter · GitHub</title>
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub" />
    <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub" />
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-114.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-144.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144.png" />
    <meta property="fb:app_id" content="1401488693436528"/>

      <meta content="@github" name="twitter:site" /><meta content="summary" name="twitter:card" /><meta content="EllisLab/CodeIgniter" name="twitter:title" /><meta content="CodeIgniter - EllisLab&amp;#39;s Open Source PHP Framework" name="twitter:description" /><meta content="https://avatars1.githubusercontent.com/u/199625?s=400" name="twitter:image:src" />
<meta content="GitHub" property="og:site_name" /><meta content="object" property="og:type" /><meta content="https://avatars1.githubusercontent.com/u/199625?s=400" property="og:image" /><meta content="EllisLab/CodeIgniter" property="og:title" /><meta content="https://github.com/EllisLab/CodeIgniter" property="og:url" /><meta content="CodeIgniter - EllisLab&#39;s Open Source PHP Framework" property="og:description" />

    <link rel="assets" href="https://assets-cdn.github.com/">
    <link rel="conduit-xhr" href="https://ghconduit.com:25035/">
    <link rel="xhr-socket" href="/_sockets" />

    <meta name="msapplication-TileImage" content="/windows-tile.png" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="selected-link" value="repo_source" data-pjax-transient />
    <meta content="collector.githubapp.com" name="octolytics-host" /><meta content="collector-cdn.github.com" name="octolytics-script-host" /><meta content="github" name="octolytics-app-id" /><meta content="70C35AF7:522B:10039FC:537464CB" name="octolytics-dimension-request_id" />
    

    
    
    <link rel="icon" type="image/x-icon" href="https://assets-cdn.github.com/favicon.ico" />

    <meta content="authenticity_token" name="csrf-param" />
<meta content="C330uhub2flPyJiLWIGzjXDhxlEYKmr3CYUUsdI8uK7pCBrDdPYgMaQGARbzor8bBDGXqiyvJ7Nxig9aO8ZBQg==" name="csrf-token" />

    <link href="https://assets-cdn.github.com/assets/github-08eca722f10c5a963656d215e35a809b85c86d1e.css" media="all" rel="stylesheet" type="text/css" />
    <link href="https://assets-cdn.github.com/assets/github2-50bd4d5d683bdda80f061b5d079826bd642a2787.css" media="all" rel="stylesheet" type="text/css" />
    


    <meta http-equiv="x-pjax-version" content="8f882ae42120fd172a3d81adab0f2690">

      
  <meta name="description" content="CodeIgniter - EllisLab&#39;s Open Source PHP Framework" />

  <meta content="199625" name="octolytics-dimension-user_id" /><meta content="EllisLab" name="octolytics-dimension-user_login" /><meta content="2234102" name="octolytics-dimension-repository_id" /><meta content="EllisLab/CodeIgniter" name="octolytics-dimension-repository_nwo" /><meta content="true" name="octolytics-dimension-repository_public" /><meta content="false" name="octolytics-dimension-repository_is_fork" /><meta content="2234102" name="octolytics-dimension-repository_network_root_id" /><meta content="EllisLab/CodeIgniter" name="octolytics-dimension-repository_network_root_nwo" />
  <link href="https://github.com/EllisLab/CodeIgniter/commits/develop.atom" rel="alternate" title="Recent Commits to CodeIgniter:develop" type="application/atom+xml" />

  </head>


  <body class="logged_out  env-production  vis-public page-blob">
    <a href="#start-of-content" tabindex="1" class="accessibility-aid js-skip-to-content">Skip to content</a>
    <div class="wrapper">
      
      
      
      


      
      <div class="header header-logged-out">
  <div class="container clearfix">

    <a class="header-logo-wordmark" href="https://github.com/">
      <span class="mega-octicon octicon-logo-github"></span>
    </a>

    <div class="header-actions">
        <a class="button primary" href="/join">Sign up</a>
      <a class="button signin" href="/login?return_to=%2FEllisLab%2FCodeIgniter%2Fblob%2Fdevelop%2Fsystem%2Fdatabase%2Fdrivers%2Fsqlsrv%2Fsqlsrv_result.php">Sign in</a>
    </div>

    <div class="command-bar js-command-bar  in-repository">

      <ul class="top-nav">
          <li class="explore"><a href="/explore">Explore</a></li>
        <li class="features"><a href="/features">Features</a></li>
          <li class="enterprise"><a href="https://enterprise.github.com/">Enterprise</a></li>
          <li class="blog"><a href="/blog">Blog</a></li>
      </ul>
        <form accept-charset="UTF-8" action="/search" class="command-bar-form" id="top_search_form" method="get">

<div class="commandbar">
  <span class="message"></span>
  <input type="text" data-hotkey="s, /" name="q" id="js-command-bar-field" placeholder="Search or type a command" tabindex="1" autocapitalize="off"
    
    
      data-repo="EllisLab/CodeIgniter"
      data-branch="develop"
      data-sha="6ac06409543a2f694905c61cd074f90ebbbb0bbb"
  >
  <div class="display hidden"></div>
</div>

    <input type="hidden" name="nwo" value="EllisLab/CodeIgniter" />

    <div class="select-menu js-menu-container js-select-menu search-context-select-menu">
      <span class="minibutton select-menu-button js-menu-target" role="button" aria-haspopup="true">
        <span class="js-select-button">This repository</span>
      </span>

      <div class="select-menu-modal-holder js-menu-content js-navigation-container" aria-hidden="true">
        <div class="select-menu-modal">

          <div class="select-menu-item js-navigation-item js-this-repository-navigation-item selected">
            <span class="select-menu-item-icon octicon octicon-check"></span>
            <input type="radio" class="js-search-this-repository" name="search_target" value="repository" checked="checked" />
            <div class="select-menu-item-text js-select-button-text">This repository</div>
          </div> <!-- /.select-menu-item -->

          <div class="select-menu-item js-navigation-item js-all-repositories-navigation-item">
            <span class="select-menu-item-icon octicon octicon-check"></span>
            <input type="radio" name="search_target" value="global" />
            <div class="select-menu-item-text js-select-button-text">All repositories</div>
          </div> <!-- /.select-menu-item -->

        </div>
      </div>
    </div>

  <span class="help tooltipped tooltipped-s" aria-label="Show command bar help">
    <span class="octicon octicon-question"></span>
  </span>


  <input type="hidden" name="ref" value="cmdform">

</form>
    </div>

  </div>
</div>



      <div id="start-of-content" class="accessibility-aid"></div>
          <div class="site" itemscope itemtype="http://schema.org/WebPage">
    <div id="js-flash-container">
      
    </div>
    <div class="pagehead repohead instapaper_ignore readability-menu">
      <div class="container">
        

<ul class="pagehead-actions">


  <li>
    <a href="/login?return_to=%2FEllisLab%2FCodeIgniter"
    class="minibutton with-count star-button tooltipped tooltipped-n"
    aria-label="You must be signed in to star a repository" rel="nofollow">
    <span class="octicon octicon-star"></span>Star
  </a>

    <a class="social-count js-social-count" href="/EllisLab/CodeIgniter/stargazers">
      7,592
    </a>

  </li>

    <li>
      <a href="/login?return_to=%2FEllisLab%2FCodeIgniter"
        class="minibutton with-count js-toggler-target fork-button tooltipped tooltipped-n"
        aria-label="You must be signed in to fork a repository" rel="nofollow">
        <span class="octicon octicon-git-branch"></span>Fork
      </a>
      <a href="/EllisLab/CodeIgniter/network" class="social-count">
        3,827
      </a>
    </li>
</ul>

        <h1 itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="entry-title public">
          <span class="repo-label"><span>public</span></span>
          <span class="mega-octicon octicon-repo"></span>
          <span class="author"><a href="/EllisLab" class="url fn" itemprop="url" rel="author"><span itemprop="title">EllisLab</span></a></span><!--
       --><span class="path-divider">/</span><!--
       --><strong><a href="/EllisLab/CodeIgniter" class="js-current-repository js-repo-home-link">CodeIgniter</a></strong>

          <span class="page-context-loader">
            <img alt="Octocat-spinner-32" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
          </span>

        </h1>
      </div><!-- /.container -->
    </div><!-- /.repohead -->

    <div class="container">
      <div class="repository-with-sidebar repo-container new-discussion-timeline js-new-discussion-timeline  ">
        <div class="repository-sidebar clearfix">
            

<div class="sunken-menu vertical-right repo-nav js-repo-nav js-repository-container-pjax js-octicon-loaders">
  <div class="sunken-menu-contents">
    <ul class="sunken-menu-group">
      <li class="tooltipped tooltipped-w" aria-label="Code">
        <a href="/EllisLab/CodeIgniter" aria-label="Code" class="selected js-selected-navigation-item sunken-menu-item" data-hotkey="g c" data-pjax="true" data-selected-links="repo_source repo_downloads repo_commits repo_releases repo_tags repo_branches /EllisLab/CodeIgniter">
          <span class="octicon octicon-code"></span> <span class="full-word">Code</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

        <li class="tooltipped tooltipped-w" aria-label="Issues">
          <a href="/EllisLab/CodeIgniter/issues" aria-label="Issues" class="js-selected-navigation-item sunken-menu-item js-disable-pjax" data-hotkey="g i" data-selected-links="repo_issues /EllisLab/CodeIgniter/issues">
            <span class="octicon octicon-issue-opened"></span> <span class="full-word">Issues</span>
            <span class='counter'>85</span>
            <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>        </li>

      <li class="tooltipped tooltipped-w" aria-label="Pull Requests">
        <a href="/EllisLab/CodeIgniter/pulls" aria-label="Pull Requests" class="js-selected-navigation-item sunken-menu-item js-disable-pjax" data-hotkey="g p" data-selected-links="repo_pulls /EllisLab/CodeIgniter/pulls">
            <span class="octicon octicon-git-pull-request"></span> <span class="full-word">Pull Requests</span>
            <span class='counter'>22</span>
            <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>


        <li class="tooltipped tooltipped-w" aria-label="Wiki">
          <a href="/EllisLab/CodeIgniter/wiki" aria-label="Wiki" class="js-selected-navigation-item sunken-menu-item js-disable-pjax" data-hotkey="g w" data-selected-links="repo_wiki /EllisLab/CodeIgniter/wiki">
            <span class="octicon octicon-book"></span> <span class="full-word">Wiki</span>
            <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>        </li>
    </ul>
    <div class="sunken-menu-separator"></div>
    <ul class="sunken-menu-group">

      <li class="tooltipped tooltipped-w" aria-label="Pulse">
        <a href="/EllisLab/CodeIgniter/pulse" aria-label="Pulse" class="js-selected-navigation-item sunken-menu-item" data-pjax="true" data-selected-links="pulse /EllisLab/CodeIgniter/pulse">
          <span class="octicon octicon-pulse"></span> <span class="full-word">Pulse</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

      <li class="tooltipped tooltipped-w" aria-label="Graphs">
        <a href="/EllisLab/CodeIgniter/graphs" aria-label="Graphs" class="js-selected-navigation-item sunken-menu-item" data-pjax="true" data-selected-links="repo_graphs repo_contributors /EllisLab/CodeIgniter/graphs">
          <span class="octicon octicon-graph"></span> <span class="full-word">Graphs</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

      <li class="tooltipped tooltipped-w" aria-label="Network">
        <a href="/EllisLab/CodeIgniter/network" aria-label="Network" class="js-selected-navigation-item sunken-menu-item js-disable-pjax" data-selected-links="repo_network /EllisLab/CodeIgniter/network">
          <span class="octicon octicon-git-branch"></span> <span class="full-word">Network</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>
    </ul>


  </div>
</div>

              <div class="only-with-full-nav">
                

  

<div class="clone-url open"
  data-protocol-type="http"
  data-url="/users/set_protocol?protocol_selector=http&amp;protocol_type=clone">
  <h3><strong>HTTPS</strong> clone URL</h3>
  <div class="clone-url-box">
    <input type="text" class="clone js-url-field"
           value="https://github.com/EllisLab/CodeIgniter.git" readonly="readonly">
    <span class="url-box-clippy">
    <button aria-label="copy to clipboard" class="js-zeroclipboard minibutton zeroclipboard-button" data-clipboard-text="https://github.com/EllisLab/CodeIgniter.git" data-copied-hint="copied!" type="button"><span class="octicon octicon-clippy"></span></button>
    </span>
  </div>
</div>

  

<div class="clone-url "
  data-protocol-type="subversion"
  data-url="/users/set_protocol?protocol_selector=subversion&amp;protocol_type=clone">
  <h3><strong>Subversion</strong> checkout URL</h3>
  <div class="clone-url-box">
    <input type="text" class="clone js-url-field"
           value="https://github.com/EllisLab/CodeIgniter" readonly="readonly">
    <span class="url-box-clippy">
    <button aria-label="copy to clipboard" class="js-zeroclipboard minibutton zeroclipboard-button" data-clipboard-text="https://github.com/EllisLab/CodeIgniter" data-copied-hint="copied!" type="button"><span class="octicon octicon-clippy"></span></button>
    </span>
  </div>
</div>


<p class="clone-options">You can clone with
      <a href="#" class="js-clone-selector" data-protocol="http">HTTPS</a>
      or <a href="#" class="js-clone-selector" data-protocol="subversion">Subversion</a>.
  <span class="help tooltipped tooltipped-n" aria-label="Get help on which URL is right for you.">
    <a href="https://help.github.com/articles/which-remote-url-should-i-use">
    <span class="octicon octicon-question"></span>
    </a>
  </span>
</p>



                <a href="/EllisLab/CodeIgniter/archive/develop.zip"
                   class="minibutton sidebar-button"
                   aria-label="Download EllisLab/CodeIgniter as a zip file"
                   title="Download EllisLab/CodeIgniter as a zip file"
                   rel="nofollow">
                  <span class="octicon octicon-cloud-download"></span>
                  Download ZIP
                </a>
              </div>
        </div><!-- /.repository-sidebar -->

        <div id="js-repo-pjax-container" class="repository-content context-loader-container" data-pjax-container>
          


<a href="/EllisLab/CodeIgniter/blob/8c833f4c096a1fa9187c599943159eacb3f7133a/system/database/drivers/sqlsrv/sqlsrv_result.php" class="hidden js-permalink-shortcut" data-hotkey="y">Permalink</a>

<!-- blob contrib key: blob_contributors:v21:9a9f05f760e1041628fbf7d09c36d511 -->

<p title="This is a placeholder element" class="js-history-link-replace hidden"></p>

<a href="/EllisLab/CodeIgniter/find/develop" data-pjax data-hotkey="t" class="js-show-file-finder" style="display:none">Show File Finder</a>

<div class="file-navigation">
  

<div class="select-menu js-menu-container js-select-menu" >
  <span class="minibutton select-menu-button js-menu-target" data-hotkey="w"
    data-master-branch="develop"
    data-ref="develop"
    role="button" aria-label="Switch branches or tags" tabindex="0" aria-haspopup="true">
    <span class="octicon octicon-git-branch"></span>
    <i>branch:</i>
    <span class="js-select-button">develop</span>
  </span>

  <div class="select-menu-modal-holder js-menu-content js-navigation-container" data-pjax aria-hidden="true">

    <div class="select-menu-modal">
      <div class="select-menu-header">
        <span class="select-menu-title">Switch branches/tags</span>
        <span class="octicon octicon-remove-close js-menu-close"></span>
      </div> <!-- /.select-menu-header -->

      <div class="select-menu-filters">
        <div class="select-menu-text-filter">
          <input type="text" aria-label="Filter branches/tags" id="context-commitish-filter-field" class="js-filterable-field js-navigation-enable" placeholder="Filter branches/tags">
        </div>
        <div class="select-menu-tabs">
          <ul>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="branches" class="js-select-menu-tab">Branches</a>
            </li>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="tags" class="js-select-menu-tab">Tags</a>
            </li>
          </ul>
        </div><!-- /.select-menu-tabs -->
      </div><!-- /.select-menu-filters -->

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="branches">

        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/EllisLab/CodeIgniter/blob/2.1-stable/system/database/drivers/sqlsrv/sqlsrv_result.php"
                 data-name="2.1-stable"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="2.1-stable">2.1-stable</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item selected">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/EllisLab/CodeIgniter/blob/develop/system/database/drivers/sqlsrv/sqlsrv_result.php"
                 data-name="develop"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="develop">develop</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/EllisLab/CodeIgniter/blob/feature/abstract-config-load/system/database/drivers/sqlsrv/sqlsrv_result.php"
                 data-name="feature/abstract-config-load"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="feature/abstract-config-load">feature/abstract-config-load</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/EllisLab/CodeIgniter/blob/feature/db_pdo_transition/system/database/drivers/sqlsrv/sqlsrv_result.php"
                 data-name="feature/db_pdo_transition"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="feature/db_pdo_transition">feature/db_pdo_transition</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/EllisLab/CodeIgniter/blob/feature/db_row_default/system/database/drivers/sqlsrv/sqlsrv_result.php"
                 data-name="feature/db_row_default"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="feature/db_row_default">feature/db_row_default</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/EllisLab/CodeIgniter/blob/feature/eu-cookie-law/system/database/drivers/sqlsrv/sqlsrv_result.php"
                 data-name="feature/eu-cookie-law"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="feature/eu-cookie-law">feature/eu-cookie-law</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/EllisLab/CodeIgniter/blob/feature/html5/system/database/drivers/sqlsrv/sqlsrv_result.php"
                 data-name="feature/html5"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="feature/html5">feature/html5</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/EllisLab/CodeIgniter/blob/feature/loader-improvements/system/database/drivers/sqlsrv/sqlsrv_result.php"
                 data-name="feature/loader-improvements"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="feature/loader-improvements">feature/loader-improvements</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/EllisLab/CodeIgniter/blob/feature/replace_cookies/system/database/drivers/sqlsrv/sqlsrv_result.php"
                 data-name="feature/replace_cookies"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="feature/replace_cookies">feature/replace_cookies</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/EllisLab/CodeIgniter/blob/feature/sparks/system/database/drivers/sqlsrv/sqlsrv_result.php"
                 data-name="feature/sparks"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="feature/sparks">feature/sparks</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/EllisLab/CodeIgniter/blob/feature/stringify_attributes/system/database/drivers/sqlsrv/sqlsrv_result.php"
                 data-name="feature/stringify_attributes"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="feature/stringify_attributes">feature/stringify_attributes</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/EllisLab/CodeIgniter/blob/feature/user-notes/system/database/drivers/sqlsrv/sqlsrv_result.php"
                 data-name="feature/user-notes"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="feature/user-notes">feature/user-notes</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/EllisLab/CodeIgniter/blob/feature/utf8-changes/system/database/drivers/sqlsrv/sqlsrv_result.php"
                 data-name="feature/utf8-changes"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="feature/utf8-changes">feature/utf8-changes</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/EllisLab/CodeIgniter/blob/hmvc-lite/system/database/drivers/sqlsrv/sqlsrv_result.php"
                 data-name="hmvc-lite"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="hmvc-lite">hmvc-lite</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/EllisLab/CodeIgniter/blob/master/system/database/drivers/sqlsrv/sqlsrv_result.php"
                 data-name="master"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="master">master</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/EllisLab/CodeIgniter/blob/release/3.0/system/database/drivers/sqlsrv/sqlsrv_result.php"
                 data-name="release/3.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="release/3.0">release/3.0</a>
            </div> <!-- /.select-menu-item -->
        </div>

          <div class="select-menu-no-results">Nothing to show</div>
      </div> <!-- /.select-menu-list -->

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="tags">
        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/EllisLab/CodeIgniter/tree/v2.1.0/system/database/drivers/sqlsrv/sqlsrv_result.php"
                 data-name="v2.1.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="v2.1.0">v2.1.0</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/EllisLab/CodeIgniter/tree/v2.0.3-corrected-changelog/system/database/drivers/sqlsrv/sqlsrv_result.php"
                 data-name="v2.0.3-corrected-changelog"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="v2.0.3-corrected-changelog">v2.0.3-corrected-changelog</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/EllisLab/CodeIgniter/tree/v2.0.3/system/database/drivers/sqlsrv/sqlsrv_result.php"
                 data-name="v2.0.3"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="v2.0.3">v2.0.3</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/EllisLab/CodeIgniter/tree/2.1.4/system/database/drivers/sqlsrv/sqlsrv_result.php"
                 data-name="2.1.4"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="2.1.4">2.1.4</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/EllisLab/CodeIgniter/tree/2.1.3/system/database/drivers/sqlsrv/sqlsrv_result.php"
                 data-name="2.1.3"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="2.1.3">2.1.3</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/EllisLab/CodeIgniter/tree/2.1.2/system/database/drivers/sqlsrv/sqlsrv_result.php"
                 data-name="2.1.2"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="2.1.2">2.1.2</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/EllisLab/CodeIgniter/tree/2.1.1/system/database/drivers/sqlsrv/sqlsrv_result.php"
                 data-name="2.1.1"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="2.1.1">2.1.1</a>
            </div> <!-- /.select-menu-item -->
        </div>

        <div class="select-menu-no-results">Nothing to show</div>
      </div> <!-- /.select-menu-list -->

    </div> <!-- /.select-menu-modal -->
  </div> <!-- /.select-menu-modal-holder -->
</div> <!-- /.select-menu -->

  <div class="breadcrumb">
    <span class='repo-root js-repo-root'><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/EllisLab/CodeIgniter" data-branch="develop" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">CodeIgniter</span></a></span></span><span class="separator"> / </span><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/EllisLab/CodeIgniter/tree/develop/system" data-branch="develop" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">system</span></a></span><span class="separator"> / </span><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/EllisLab/CodeIgniter/tree/develop/system/database" data-branch="develop" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">database</span></a></span><span class="separator"> / </span><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/EllisLab/CodeIgniter/tree/develop/system/database/drivers" data-branch="develop" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">drivers</span></a></span><span class="separator"> / </span><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/EllisLab/CodeIgniter/tree/develop/system/database/drivers/sqlsrv" data-branch="develop" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">sqlsrv</span></a></span><span class="separator"> / </span><strong class="final-path">sqlsrv_result.php</strong> <button aria-label="copy to clipboard" class="js-zeroclipboard minibutton zeroclipboard-button" data-clipboard-text="system/database/drivers/sqlsrv/sqlsrv_result.php" data-copied-hint="copied!" type="button"><span class="octicon octicon-clippy"></span></button>
  </div>
</div>


  <div class="commit commit-loader file-history-tease js-deferred-content" data-url="/EllisLab/CodeIgniter/contributors/develop/system/database/drivers/sqlsrv/sqlsrv_result.php">
    Fetching contributors…

    <div class="participation">
      <p class="loader-loading"><img alt="Octocat-spinner-32-eaf2f5" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32-EAF2F5.gif" width="16" /></p>
      <p class="loader-error">Cannot retrieve contributors at this time</p>
    </div>
  </div>

<div class="file-box">
  <div class="file">
    <div class="meta clearfix">
      <div class="info file-name">
        <span class="icon"><b class="octicon octicon-file-text"></b></span>
        <span class="mode" title="File Mode">file</span>
        <span class="meta-divider"></span>
          <span>186 lines (162 sloc)</span>
          <span class="meta-divider"></span>
        <span>4.27 kb</span>
      </div>
      <div class="actions">
        <div class="button-group">
              <a class="minibutton disabled tooltipped tooltipped-w" href="#"
                 aria-label="You must be signed in to make or propose changes">Edit</a>
          <a href="/EllisLab/CodeIgniter/raw/develop/system/database/drivers/sqlsrv/sqlsrv_result.php" class="button minibutton " id="raw-url">Raw</a>
            <a href="/EllisLab/CodeIgniter/blame/develop/system/database/drivers/sqlsrv/sqlsrv_result.php" class="button minibutton js-update-url-with-hash">Blame</a>
          <a href="/EllisLab/CodeIgniter/commits/develop/system/database/drivers/sqlsrv/sqlsrv_result.php" class="button minibutton " rel="nofollow">History</a>
        </div><!-- /.button-group -->
          <a class="minibutton danger disabled empty-icon tooltipped tooltipped-w" href="#"
             aria-label="You must be signed in to make or propose changes">
          Delete
        </a>
      </div><!-- /.actions -->
    </div>
        <div class="blob-wrapper data type-php js-blob-data">
        <table class="file-code file-diff tab-size-8">
          <tr class="file-code-line">
            <td class="blob-line-nums">
              <span id="L1" rel="#L1">1</span>
<span id="L2" rel="#L2">2</span>
<span id="L3" rel="#L3">3</span>
<span id="L4" rel="#L4">4</span>
<span id="L5" rel="#L5">5</span>
<span id="L6" rel="#L6">6</span>
<span id="L7" rel="#L7">7</span>
<span id="L8" rel="#L8">8</span>
<span id="L9" rel="#L9">9</span>
<span id="L10" rel="#L10">10</span>
<span id="L11" rel="#L11">11</span>
<span id="L12" rel="#L12">12</span>
<span id="L13" rel="#L13">13</span>
<span id="L14" rel="#L14">14</span>
<span id="L15" rel="#L15">15</span>
<span id="L16" rel="#L16">16</span>
<span id="L17" rel="#L17">17</span>
<span id="L18" rel="#L18">18</span>
<span id="L19" rel="#L19">19</span>
<span id="L20" rel="#L20">20</span>
<span id="L21" rel="#L21">21</span>
<span id="L22" rel="#L22">22</span>
<span id="L23" rel="#L23">23</span>
<span id="L24" rel="#L24">24</span>
<span id="L25" rel="#L25">25</span>
<span id="L26" rel="#L26">26</span>
<span id="L27" rel="#L27">27</span>
<span id="L28" rel="#L28">28</span>
<span id="L29" rel="#L29">29</span>
<span id="L30" rel="#L30">30</span>
<span id="L31" rel="#L31">31</span>
<span id="L32" rel="#L32">32</span>
<span id="L33" rel="#L33">33</span>
<span id="L34" rel="#L34">34</span>
<span id="L35" rel="#L35">35</span>
<span id="L36" rel="#L36">36</span>
<span id="L37" rel="#L37">37</span>
<span id="L38" rel="#L38">38</span>
<span id="L39" rel="#L39">39</span>
<span id="L40" rel="#L40">40</span>
<span id="L41" rel="#L41">41</span>
<span id="L42" rel="#L42">42</span>
<span id="L43" rel="#L43">43</span>
<span id="L44" rel="#L44">44</span>
<span id="L45" rel="#L45">45</span>
<span id="L46" rel="#L46">46</span>
<span id="L47" rel="#L47">47</span>
<span id="L48" rel="#L48">48</span>
<span id="L49" rel="#L49">49</span>
<span id="L50" rel="#L50">50</span>
<span id="L51" rel="#L51">51</span>
<span id="L52" rel="#L52">52</span>
<span id="L53" rel="#L53">53</span>
<span id="L54" rel="#L54">54</span>
<span id="L55" rel="#L55">55</span>
<span id="L56" rel="#L56">56</span>
<span id="L57" rel="#L57">57</span>
<span id="L58" rel="#L58">58</span>
<span id="L59" rel="#L59">59</span>
<span id="L60" rel="#L60">60</span>
<span id="L61" rel="#L61">61</span>
<span id="L62" rel="#L62">62</span>
<span id="L63" rel="#L63">63</span>
<span id="L64" rel="#L64">64</span>
<span id="L65" rel="#L65">65</span>
<span id="L66" rel="#L66">66</span>
<span id="L67" rel="#L67">67</span>
<span id="L68" rel="#L68">68</span>
<span id="L69" rel="#L69">69</span>
<span id="L70" rel="#L70">70</span>
<span id="L71" rel="#L71">71</span>
<span id="L72" rel="#L72">72</span>
<span id="L73" rel="#L73">73</span>
<span id="L74" rel="#L74">74</span>
<span id="L75" rel="#L75">75</span>
<span id="L76" rel="#L76">76</span>
<span id="L77" rel="#L77">77</span>
<span id="L78" rel="#L78">78</span>
<span id="L79" rel="#L79">79</span>
<span id="L80" rel="#L80">80</span>
<span id="L81" rel="#L81">81</span>
<span id="L82" rel="#L82">82</span>
<span id="L83" rel="#L83">83</span>
<span id="L84" rel="#L84">84</span>
<span id="L85" rel="#L85">85</span>
<span id="L86" rel="#L86">86</span>
<span id="L87" rel="#L87">87</span>
<span id="L88" rel="#L88">88</span>
<span id="L89" rel="#L89">89</span>
<span id="L90" rel="#L90">90</span>
<span id="L91" rel="#L91">91</span>
<span id="L92" rel="#L92">92</span>
<span id="L93" rel="#L93">93</span>
<span id="L94" rel="#L94">94</span>
<span id="L95" rel="#L95">95</span>
<span id="L96" rel="#L96">96</span>
<span id="L97" rel="#L97">97</span>
<span id="L98" rel="#L98">98</span>
<span id="L99" rel="#L99">99</span>
<span id="L100" rel="#L100">100</span>
<span id="L101" rel="#L101">101</span>
<span id="L102" rel="#L102">102</span>
<span id="L103" rel="#L103">103</span>
<span id="L104" rel="#L104">104</span>
<span id="L105" rel="#L105">105</span>
<span id="L106" rel="#L106">106</span>
<span id="L107" rel="#L107">107</span>
<span id="L108" rel="#L108">108</span>
<span id="L109" rel="#L109">109</span>
<span id="L110" rel="#L110">110</span>
<span id="L111" rel="#L111">111</span>
<span id="L112" rel="#L112">112</span>
<span id="L113" rel="#L113">113</span>
<span id="L114" rel="#L114">114</span>
<span id="L115" rel="#L115">115</span>
<span id="L116" rel="#L116">116</span>
<span id="L117" rel="#L117">117</span>
<span id="L118" rel="#L118">118</span>
<span id="L119" rel="#L119">119</span>
<span id="L120" rel="#L120">120</span>
<span id="L121" rel="#L121">121</span>
<span id="L122" rel="#L122">122</span>
<span id="L123" rel="#L123">123</span>
<span id="L124" rel="#L124">124</span>
<span id="L125" rel="#L125">125</span>
<span id="L126" rel="#L126">126</span>
<span id="L127" rel="#L127">127</span>
<span id="L128" rel="#L128">128</span>
<span id="L129" rel="#L129">129</span>
<span id="L130" rel="#L130">130</span>
<span id="L131" rel="#L131">131</span>
<span id="L132" rel="#L132">132</span>
<span id="L133" rel="#L133">133</span>
<span id="L134" rel="#L134">134</span>
<span id="L135" rel="#L135">135</span>
<span id="L136" rel="#L136">136</span>
<span id="L137" rel="#L137">137</span>
<span id="L138" rel="#L138">138</span>
<span id="L139" rel="#L139">139</span>
<span id="L140" rel="#L140">140</span>
<span id="L141" rel="#L141">141</span>
<span id="L142" rel="#L142">142</span>
<span id="L143" rel="#L143">143</span>
<span id="L144" rel="#L144">144</span>
<span id="L145" rel="#L145">145</span>
<span id="L146" rel="#L146">146</span>
<span id="L147" rel="#L147">147</span>
<span id="L148" rel="#L148">148</span>
<span id="L149" rel="#L149">149</span>
<span id="L150" rel="#L150">150</span>
<span id="L151" rel="#L151">151</span>
<span id="L152" rel="#L152">152</span>
<span id="L153" rel="#L153">153</span>
<span id="L154" rel="#L154">154</span>
<span id="L155" rel="#L155">155</span>
<span id="L156" rel="#L156">156</span>
<span id="L157" rel="#L157">157</span>
<span id="L158" rel="#L158">158</span>
<span id="L159" rel="#L159">159</span>
<span id="L160" rel="#L160">160</span>
<span id="L161" rel="#L161">161</span>
<span id="L162" rel="#L162">162</span>
<span id="L163" rel="#L163">163</span>
<span id="L164" rel="#L164">164</span>
<span id="L165" rel="#L165">165</span>
<span id="L166" rel="#L166">166</span>
<span id="L167" rel="#L167">167</span>
<span id="L168" rel="#L168">168</span>
<span id="L169" rel="#L169">169</span>
<span id="L170" rel="#L170">170</span>
<span id="L171" rel="#L171">171</span>
<span id="L172" rel="#L172">172</span>
<span id="L173" rel="#L173">173</span>
<span id="L174" rel="#L174">174</span>
<span id="L175" rel="#L175">175</span>
<span id="L176" rel="#L176">176</span>
<span id="L177" rel="#L177">177</span>
<span id="L178" rel="#L178">178</span>
<span id="L179" rel="#L179">179</span>
<span id="L180" rel="#L180">180</span>
<span id="L181" rel="#L181">181</span>
<span id="L182" rel="#L182">182</span>
<span id="L183" rel="#L183">183</span>
<span id="L184" rel="#L184">184</span>
<span id="L185" rel="#L185">185</span>
<span id="L186" rel="#L186">186</span>

            </td>
            <td class="blob-line-code"><div class="code-body highlight"><pre><div class='line' id='LC1'><span class="o">&lt;?</span><span class="nx">php</span></div><div class='line' id='LC2'><span class="sd">/**</span></div><div class='line' id='LC3'><span class="sd"> * CodeIgniter</span></div><div class='line' id='LC4'><span class="sd"> *</span></div><div class='line' id='LC5'><span class="sd"> * An open source application development framework for PHP 5.2.4 or newer</span></div><div class='line' id='LC6'><span class="sd"> *</span></div><div class='line' id='LC7'><span class="sd"> * NOTICE OF LICENSE</span></div><div class='line' id='LC8'><span class="sd"> *</span></div><div class='line' id='LC9'><span class="sd"> * Licensed under the Open Software License version 3.0</span></div><div class='line' id='LC10'><span class="sd"> *</span></div><div class='line' id='LC11'><span class="sd"> * This source file is subject to the Open Software License (OSL 3.0) that is</span></div><div class='line' id='LC12'><span class="sd"> * bundled with this package in the files license.txt / license.rst.  It is</span></div><div class='line' id='LC13'><span class="sd"> * also available through the world wide web at this URL:</span></div><div class='line' id='LC14'><span class="sd"> * http://opensource.org/licenses/OSL-3.0</span></div><div class='line' id='LC15'><span class="sd"> * If you did not receive a copy of the license and are unable to obtain it</span></div><div class='line' id='LC16'><span class="sd"> * through the world wide web, please send an email to</span></div><div class='line' id='LC17'><span class="sd"> * licensing@ellislab.com so we can send you a copy immediately.</span></div><div class='line' id='LC18'><span class="sd"> *</span></div><div class='line' id='LC19'><span class="sd"> * @package		CodeIgniter</span></div><div class='line' id='LC20'><span class="sd"> * @author		EllisLab Dev Team</span></div><div class='line' id='LC21'><span class="sd"> * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (http://ellislab.com/)</span></div><div class='line' id='LC22'><span class="sd"> * @license		http://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)</span></div><div class='line' id='LC23'><span class="sd"> * @link		http://codeigniter.com</span></div><div class='line' id='LC24'><span class="sd"> * @since		Version 1.0</span></div><div class='line' id='LC25'><span class="sd"> * @filesource</span></div><div class='line' id='LC26'><span class="sd"> */</span></div><div class='line' id='LC27'><span class="nb">defined</span><span class="p">(</span><span class="s1">&#39;BASEPATH&#39;</span><span class="p">)</span> <span class="k">OR</span> <span class="k">exit</span><span class="p">(</span><span class="s1">&#39;No direct script access allowed&#39;</span><span class="p">);</span></div><div class='line' id='LC28'><br/></div><div class='line' id='LC29'><span class="sd">/**</span></div><div class='line' id='LC30'><span class="sd"> * SQLSRV Result Class</span></div><div class='line' id='LC31'><span class="sd"> *</span></div><div class='line' id='LC32'><span class="sd"> * This class extends the parent result class: CI_DB_result</span></div><div class='line' id='LC33'><span class="sd"> *</span></div><div class='line' id='LC34'><span class="sd"> * @category	Database</span></div><div class='line' id='LC35'><span class="sd"> * @author		EllisLab Dev Team</span></div><div class='line' id='LC36'><span class="sd"> * @link		http://codeigniter.com/user_guide/database/</span></div><div class='line' id='LC37'><span class="sd"> * @since	2.0.3</span></div><div class='line' id='LC38'><span class="sd"> */</span></div><div class='line' id='LC39'><span class="k">class</span> <span class="nc">CI_DB_sqlsrv_result</span> <span class="k">extends</span> <span class="nx">CI_DB_result</span> <span class="p">{</span></div><div class='line' id='LC40'><br/></div><div class='line' id='LC41'>	<span class="sd">/**</span></div><div class='line' id='LC42'><span class="sd">	 * Scrollable flag</span></div><div class='line' id='LC43'><span class="sd">	 *</span></div><div class='line' id='LC44'><span class="sd">	 * @var	mixed</span></div><div class='line' id='LC45'><span class="sd">	 */</span></div><div class='line' id='LC46'>	<span class="k">public</span> <span class="nv">$scrollable</span><span class="p">;</span></div><div class='line' id='LC47'><br/></div><div class='line' id='LC48'>	<span class="c1">// --------------------------------------------------------------------</span></div><div class='line' id='LC49'><br/></div><div class='line' id='LC50'>	<span class="sd">/**</span></div><div class='line' id='LC51'><span class="sd">	 * Constructor</span></div><div class='line' id='LC52'><span class="sd">	 *</span></div><div class='line' id='LC53'><span class="sd">	 * @param	object	$driver_object</span></div><div class='line' id='LC54'><span class="sd">	 * @return	void</span></div><div class='line' id='LC55'><span class="sd">	 */</span></div><div class='line' id='LC56'>	<span class="k">public</span> <span class="k">function</span> <span class="nf">__construct</span><span class="p">(</span><span class="o">&amp;</span><span class="nv">$driver_object</span><span class="p">)</span></div><div class='line' id='LC57'>	<span class="p">{</span></div><div class='line' id='LC58'>		<span class="k">parent</span><span class="o">::</span><span class="na">__construct</span><span class="p">(</span><span class="nv">$driver_object</span><span class="p">);</span></div><div class='line' id='LC59'><br/></div><div class='line' id='LC60'>		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">scrollable</span> <span class="o">=</span> <span class="nv">$driver_object</span><span class="o">-&gt;</span><span class="na">scrollable</span><span class="p">;</span></div><div class='line' id='LC61'>	<span class="p">}</span></div><div class='line' id='LC62'><br/></div><div class='line' id='LC63'>	<span class="c1">// --------------------------------------------------------------------</span></div><div class='line' id='LC64'><br/></div><div class='line' id='LC65'>	<span class="sd">/**</span></div><div class='line' id='LC66'><span class="sd">	 * Number of rows in the result set</span></div><div class='line' id='LC67'><span class="sd">	 *</span></div><div class='line' id='LC68'><span class="sd">	 * @return	int</span></div><div class='line' id='LC69'><span class="sd">	 */</span></div><div class='line' id='LC70'>	<span class="k">public</span> <span class="k">function</span> <span class="nf">num_rows</span><span class="p">()</span></div><div class='line' id='LC71'>	<span class="p">{</span></div><div class='line' id='LC72'>		<span class="c1">// sqlsrv_num_rows() doesn&#39;t work with the FORWARD and DYNAMIC cursors (FALSE is the same as FORWARD)</span></div><div class='line' id='LC73'>		<span class="k">if</span> <span class="p">(</span> <span class="o">!</span> <span class="nb">in_array</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">scrollable</span><span class="p">,</span> <span class="k">array</span><span class="p">(</span><span class="k">FALSE</span><span class="p">,</span> <span class="nx">SQLSRV_CURSOR_FORWARD</span><span class="p">,</span> <span class="nx">SQLSRV_CURSOR_DYNAMIC</span><span class="p">),</span> <span class="k">TRUE</span><span class="p">))</span></div><div class='line' id='LC74'>		<span class="p">{</span></div><div class='line' id='LC75'>			<span class="k">return</span> <span class="k">parent</span><span class="o">::</span><span class="na">num_rows</span><span class="p">();</span></div><div class='line' id='LC76'>		<span class="p">}</span></div><div class='line' id='LC77'><br/></div><div class='line' id='LC78'>		<span class="k">return</span> <span class="nb">is_int</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">num_rows</span><span class="p">)</span></div><div class='line' id='LC79'>			<span class="o">?</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">num_rows</span></div><div class='line' id='LC80'>			<span class="o">:</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">num_rows</span> <span class="o">=</span> <span class="nx">sqlsrv_num_rows</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">result_id</span><span class="p">);</span></div><div class='line' id='LC81'>	<span class="p">}</span></div><div class='line' id='LC82'><br/></div><div class='line' id='LC83'>	<span class="c1">// --------------------------------------------------------------------</span></div><div class='line' id='LC84'><br/></div><div class='line' id='LC85'>	<span class="sd">/**</span></div><div class='line' id='LC86'><span class="sd">	 * Number of fields in the result set</span></div><div class='line' id='LC87'><span class="sd">	 *</span></div><div class='line' id='LC88'><span class="sd">	 * @return	int</span></div><div class='line' id='LC89'><span class="sd">	 */</span></div><div class='line' id='LC90'>	<span class="k">public</span> <span class="k">function</span> <span class="nf">num_fields</span><span class="p">()</span></div><div class='line' id='LC91'>	<span class="p">{</span></div><div class='line' id='LC92'>		<span class="k">return</span> <span class="o">@</span><span class="nx">sqlsrv_num_fields</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">result_id</span><span class="p">);</span></div><div class='line' id='LC93'>	<span class="p">}</span></div><div class='line' id='LC94'><br/></div><div class='line' id='LC95'>	<span class="c1">// --------------------------------------------------------------------</span></div><div class='line' id='LC96'><br/></div><div class='line' id='LC97'>	<span class="sd">/**</span></div><div class='line' id='LC98'><span class="sd">	 * Fetch Field Names</span></div><div class='line' id='LC99'><span class="sd">	 *</span></div><div class='line' id='LC100'><span class="sd">	 * Generates an array of column names</span></div><div class='line' id='LC101'><span class="sd">	 *</span></div><div class='line' id='LC102'><span class="sd">	 * @return	array</span></div><div class='line' id='LC103'><span class="sd">	 */</span></div><div class='line' id='LC104'>	<span class="k">public</span> <span class="k">function</span> <span class="nf">list_fields</span><span class="p">()</span></div><div class='line' id='LC105'>	<span class="p">{</span></div><div class='line' id='LC106'>		<span class="nv">$field_names</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC107'>		<span class="k">foreach</span> <span class="p">(</span><span class="nx">sqlsrv_field_metadata</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">result_id</span><span class="p">)</span> <span class="k">as</span> <span class="nv">$offset</span> <span class="o">=&gt;</span> <span class="nv">$field</span><span class="p">)</span></div><div class='line' id='LC108'>		<span class="p">{</span></div><div class='line' id='LC109'>			<span class="nv">$field_names</span><span class="p">[]</span> <span class="o">=</span> <span class="nv">$field</span><span class="p">[</span><span class="s1">&#39;Name&#39;</span><span class="p">];</span></div><div class='line' id='LC110'>		<span class="p">}</span></div><div class='line' id='LC111'><br/></div><div class='line' id='LC112'>		<span class="k">return</span> <span class="nv">$field_names</span><span class="p">;</span></div><div class='line' id='LC113'>	<span class="p">}</span></div><div class='line' id='LC114'><br/></div><div class='line' id='LC115'>	<span class="c1">// --------------------------------------------------------------------</span></div><div class='line' id='LC116'><br/></div><div class='line' id='LC117'>	<span class="sd">/**</span></div><div class='line' id='LC118'><span class="sd">	 * Field data</span></div><div class='line' id='LC119'><span class="sd">	 *</span></div><div class='line' id='LC120'><span class="sd">	 * Generates an array of objects containing field meta-data</span></div><div class='line' id='LC121'><span class="sd">	 *</span></div><div class='line' id='LC122'><span class="sd">	 * @return	array</span></div><div class='line' id='LC123'><span class="sd">	 */</span></div><div class='line' id='LC124'>	<span class="k">public</span> <span class="k">function</span> <span class="nf">field_data</span><span class="p">()</span></div><div class='line' id='LC125'>	<span class="p">{</span></div><div class='line' id='LC126'>		<span class="nv">$retval</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC127'>		<span class="k">foreach</span> <span class="p">(</span><span class="nx">sqlsrv_field_metadata</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">result_id</span><span class="p">)</span> <span class="k">as</span> <span class="nv">$i</span> <span class="o">=&gt;</span> <span class="nv">$field</span><span class="p">)</span></div><div class='line' id='LC128'>		<span class="p">{</span></div><div class='line' id='LC129'>			<span class="nv">$retval</span><span class="p">[</span><span class="nv">$i</span><span class="p">]</span>		<span class="o">=</span> <span class="k">new</span> <span class="k">stdClass</span><span class="p">();</span></div><div class='line' id='LC130'>			<span class="nv">$retval</span><span class="p">[</span><span class="nv">$i</span><span class="p">]</span><span class="o">-&gt;</span><span class="na">name</span>	<span class="o">=</span> <span class="nv">$field</span><span class="p">[</span><span class="s1">&#39;Name&#39;</span><span class="p">];</span></div><div class='line' id='LC131'>			<span class="nv">$retval</span><span class="p">[</span><span class="nv">$i</span><span class="p">]</span><span class="o">-&gt;</span><span class="na">type</span>	<span class="o">=</span> <span class="nv">$field</span><span class="p">[</span><span class="s1">&#39;Type&#39;</span><span class="p">];</span></div><div class='line' id='LC132'>			<span class="nv">$retval</span><span class="p">[</span><span class="nv">$i</span><span class="p">]</span><span class="o">-&gt;</span><span class="na">max_length</span>	<span class="o">=</span> <span class="nv">$field</span><span class="p">[</span><span class="s1">&#39;Size&#39;</span><span class="p">];</span></div><div class='line' id='LC133'>		<span class="p">}</span></div><div class='line' id='LC134'><br/></div><div class='line' id='LC135'>		<span class="k">return</span> <span class="nv">$retval</span><span class="p">;</span></div><div class='line' id='LC136'>	<span class="p">}</span></div><div class='line' id='LC137'><br/></div><div class='line' id='LC138'>	<span class="c1">// --------------------------------------------------------------------</span></div><div class='line' id='LC139'><br/></div><div class='line' id='LC140'>	<span class="sd">/**</span></div><div class='line' id='LC141'><span class="sd">	 * Free the result</span></div><div class='line' id='LC142'><span class="sd">	 *</span></div><div class='line' id='LC143'><span class="sd">	 * @return	void</span></div><div class='line' id='LC144'><span class="sd">	 */</span></div><div class='line' id='LC145'>	<span class="k">public</span> <span class="k">function</span> <span class="nf">free_result</span><span class="p">()</span></div><div class='line' id='LC146'>	<span class="p">{</span></div><div class='line' id='LC147'>		<span class="k">if</span> <span class="p">(</span><span class="nb">is_resource</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">result_id</span><span class="p">))</span></div><div class='line' id='LC148'>		<span class="p">{</span></div><div class='line' id='LC149'>			<span class="nx">sqlsrv_free_stmt</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">result_id</span><span class="p">);</span></div><div class='line' id='LC150'>			<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">result_id</span> <span class="o">=</span> <span class="k">FALSE</span><span class="p">;</span></div><div class='line' id='LC151'>		<span class="p">}</span></div><div class='line' id='LC152'>	<span class="p">}</span></div><div class='line' id='LC153'><br/></div><div class='line' id='LC154'>	<span class="c1">// --------------------------------------------------------------------</span></div><div class='line' id='LC155'><br/></div><div class='line' id='LC156'>	<span class="sd">/**</span></div><div class='line' id='LC157'><span class="sd">	 * Result - associative array</span></div><div class='line' id='LC158'><span class="sd">	 *</span></div><div class='line' id='LC159'><span class="sd">	 * Returns the result set as an array</span></div><div class='line' id='LC160'><span class="sd">	 *</span></div><div class='line' id='LC161'><span class="sd">	 * @return	array</span></div><div class='line' id='LC162'><span class="sd">	 */</span></div><div class='line' id='LC163'>	<span class="k">protected</span> <span class="k">function</span> <span class="nf">_fetch_assoc</span><span class="p">()</span></div><div class='line' id='LC164'>	<span class="p">{</span></div><div class='line' id='LC165'>		<span class="k">return</span> <span class="nx">sqlsrv_fetch_array</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">result_id</span><span class="p">,</span> <span class="nx">SQLSRV_FETCH_ASSOC</span><span class="p">);</span></div><div class='line' id='LC166'>	<span class="p">}</span></div><div class='line' id='LC167'><br/></div><div class='line' id='LC168'>	<span class="c1">// --------------------------------------------------------------------</span></div><div class='line' id='LC169'><br/></div><div class='line' id='LC170'>	<span class="sd">/**</span></div><div class='line' id='LC171'><span class="sd">	 * Result - object</span></div><div class='line' id='LC172'><span class="sd">	 *</span></div><div class='line' id='LC173'><span class="sd">	 * Returns the result set as an object</span></div><div class='line' id='LC174'><span class="sd">	 *</span></div><div class='line' id='LC175'><span class="sd">	 * @param	string	$class_name</span></div><div class='line' id='LC176'><span class="sd">	 * @return	object</span></div><div class='line' id='LC177'><span class="sd">	 */</span></div><div class='line' id='LC178'>	<span class="k">protected</span> <span class="k">function</span> <span class="nf">_fetch_object</span><span class="p">(</span><span class="nv">$class_name</span> <span class="o">=</span> <span class="s1">&#39;stdClass&#39;</span><span class="p">)</span></div><div class='line' id='LC179'>	<span class="p">{</span></div><div class='line' id='LC180'>		<span class="k">return</span> <span class="nx">sqlsrv_fetch_object</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">result_id</span><span class="p">,</span> <span class="nv">$class_name</span><span class="p">);</span></div><div class='line' id='LC181'>	<span class="p">}</span></div><div class='line' id='LC182'><br/></div><div class='line' id='LC183'><span class="p">}</span></div><div class='line' id='LC184'><br/></div><div class='line' id='LC185'><span class="cm">/* End of file sqlsrv_result.php */</span></div><div class='line' id='LC186'><span class="cm">/* Location: ./system/database/drivers/sqlsrv/sqlsrv_result.php */</span></div></pre></div></td>
          </tr>
        </table>
  </div>

  </div>
</div>

<a href="#jump-to-line" rel="facebox[.linejump]" data-hotkey="l" class="js-jump-to-line" style="display:none">Jump to Line</a>
<div id="jump-to-line" style="display:none">
  <form accept-charset="UTF-8" class="js-jump-to-line-form">
    <input class="linejump-input js-jump-to-line-field" type="text" placeholder="Jump to line&hellip;" autofocus>
    <button type="submit" class="button">Go</button>
  </form>
</div>

        </div>

      </div><!-- /.repo-container -->
      <div class="modal-backdrop"></div>
    </div><!-- /.container -->
  </div><!-- /.site -->


    </div><!-- /.wrapper -->

      <div class="container">
  <div class="site-footer">
    <ul class="site-footer-links right">
      <li><a href="https://status.github.com/">Status</a></li>
      <li><a href="http://developer.github.com">API</a></li>
      <li><a href="http://training.github.com">Training</a></li>
      <li><a href="http://shop.github.com">Shop</a></li>
      <li><a href="/blog">Blog</a></li>
      <li><a href="/about">About</a></li>

    </ul>

    <a href="/">
      <span class="mega-octicon octicon-mark-github" title="GitHub"></span>
    </a>

    <ul class="site-footer-links">
      <li>&copy; 2014 <span title="0.05034s from github-fe135-cp1-prd.iad.github.net">GitHub</span>, Inc.</li>
        <li><a href="/site/terms">Terms</a></li>
        <li><a href="/site/privacy">Privacy</a></li>
        <li><a href="/security">Security</a></li>
        <li><a href="/contact">Contact</a></li>
    </ul>
  </div><!-- /.site-footer -->
</div><!-- /.container -->


    <div class="fullscreen-overlay js-fullscreen-overlay" id="fullscreen_overlay">
  <div class="fullscreen-container js-fullscreen-container">
    <div class="textarea-wrap">
      <textarea name="fullscreen-contents" id="fullscreen-contents" class="fullscreen-contents js-fullscreen-contents" placeholder="" data-suggester="fullscreen_suggester"></textarea>
    </div>
  </div>
  <div class="fullscreen-sidebar">
    <a href="#" class="exit-fullscreen js-exit-fullscreen tooltipped tooltipped-w" aria-label="Exit Zen Mode">
      <span class="mega-octicon octicon-screen-normal"></span>
    </a>
    <a href="#" class="theme-switcher js-theme-switcher tooltipped tooltipped-w"
      aria-label="Switch themes">
      <span class="octicon octicon-color-mode"></span>
    </a>
  </div>
</div>



    <div id="ajax-error-message" class="flash flash-error">
      <span class="octicon octicon-alert"></span>
      <a href="#" class="octicon octicon-remove-close close js-ajax-error-dismiss"></a>
      Something went wrong with that request. Please try again.
    </div>


      <script crossorigin="anonymous" src="https://assets-cdn.github.com/assets/frameworks-5a921ce2c45d4a5235b8f9c5c716611df0a83a79.js" type="text/javascript"></script>
      <script async="async" crossorigin="anonymous" src="https://assets-cdn.github.com/assets/github-71380a7260f8593a61c90ab35f6f6cf70e28aaba.js" type="text/javascript"></script>
      
      
  </body>
</html>

