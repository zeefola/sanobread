<div class="pizzaro-breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
    <nav class="woocommerce-breadcrumb">
        <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" >
        <a itemprop="item" href="/"> 
            <span itemprop="name">Home</span> 
        </a>
        <meta itemprop="position" content="1" />
        </span>

        <span class="delimiter">
            <i class="po po-arrow-right-slider"></i>
        </span>
        <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a itemprop="item" href="{{ request()->fullUrl() }}"> <span itemprop="name"> {{$title}}  </span> </a>
            <meta itemprop="position" content="2" />
        </span>
    </nav>
 </div>