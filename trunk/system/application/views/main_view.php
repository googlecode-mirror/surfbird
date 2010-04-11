<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<HTML xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<HEAD>
	<META http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<TITLE>SurfBird</TITLE>
	<META name="description" content="Surfing Bird - ��������� ��������">
	<META name="keywords" content="SirfBird, Surfing Bird, ��������, ������">

<!-- Icons -->
	<LINK rel="icon" href="<?=base_url()?>images/icons/favicon.ico" type="image/vnd.microsoft.icon">
	<LINK rel="shortcut icon" href="<?=base_url()?>images/icons/favicon.ico">
	<LINK rel="apple-touch-icon" href="<?=base_url()?>images/icons/icon_big.png">

<!-- CSS -->
	<LINK rel="stylesheet" href="<?=base_url()?>css/style.css" type="text/css">
	
<!-- Javascripts -->

</HEAD>
<BODY>

<DIV id="header">
<A href="<?=base_url()?>" id="SBLogo" title="Surfing Bird"><IMG src="<?=base_url()?>images/SBlogo.png" width="80" height="65" alt="Surfing Bird Logo"><DIV id="SBtitle">SurfBird</DIV></A>

<DIV id="headerNavigation">
<A href="<?=base_url()?>#">����� � SurfBird</A> �
<A href="<?=base_url()?>help/">������</A> � 
	<INPUT type="search">
</DIV><!-- #headerNavigation -->
</DIV><!-- #header -->

<DIV id="mainNavigation">
<UL>
	<LI class="active"><A href="<?=base_url()?>" title="�������">�������</A></LI>
	<LI><A href="/registration/" title="�����������">�����������</A></LI>
	<LI><A href="#" title="Page Three">Three</A></LI>
	<LI><A href="#" title="Page Four">Four</A></LI>
	<LI><A href="#" title="Page Five">Five</A></LI>
</UL>
</DIV><!-- #mainNavigation -->
	
<DIV id="container" class="sidebar">
	<DIV id="content">
<?echo $content; ?>
</DIV><!-- #content -->

	<DIV id="sidebar">
		<DIV id="sidebarContent">
			�������<br/>�������
		</DIV><!-- #sidebarContent -->
	</DIV><!-- #sidebar -->
</DIV><!-- #container -->

<DIV id="footer">
	<DIV id="footerNavigation">
		<A href="<?=base_url()?>about">� ���</A> � <A href="<?=base_url()?>help">������</A> � <A href="<?=base_url()?>rules">�������</A>
	</DIV><!-- #footerNavigation -->
	<DIV id="legalLinks">
		<A href="<?=base_url()?>legallinks" title="">��������� � ������������������</A> � <SPAN>� 2010 Surfing Bird</SPAN>
	</DIV><!-- #legalLinks -->
</DIV><!-- #footer -->

</BODY></HTML>