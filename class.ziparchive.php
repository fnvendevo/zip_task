<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
                      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head profile="http://purl.org/NET/erdf/profile">
 <title>PHP: ZipArchive - Manual</title>
 <style type="text/css" media="all">
  @import url("http://static.php.net/www.php.net/styles/site.css");
  @import url("http://static.php.net/www.php.net/styles/phpnet.css");
  
 </style>
 <!--[if IE]><![if gte IE 6]><![endif]-->
  <style type="text/css" media="print">
   @import url("http://static.php.net/www.php.net/styles/print.css");
  </style>
 <!--[if IE]><![endif]><![endif]-->
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
 <link rel="shortcut icon" href="http://static.php.net/www.php.net/favicon.ico" />
 <link rel="contents" href="index.php" />
 <link rel="index" href="book.zip.php" />
 <link rel="prev" href="zip.examples.php" />
 <link rel="next" href="function.ziparchive-addemptydir.php" />
 <link rel="schema.dc" href="http://purl.org/dc/elements/1.1/" />
 <link rel="schema.rdfs" href="http://www.w3.org/2000/01/rdf-schema#" />
 <link rev="canonical" rel="self alternate shorter shorturl shortlink" href="http://php.net/ziparchive" />
 <link rel="license" href="http://creativecommons.org/licenses/by/3.0/" about="#content" />
 <link rel="alternate" href="/manual/en/feeds/class.ziparchive.atom" type="application/atom+xml" />
 <link rel="canonical" href="http://php.net/manual/en/class.ziparchive.php" />
 <script type="text/javascript" src="http://static.php.net/www.php.net/userprefs.js"></script>
 <base href="http://www.php.net/manual/en/class.ziparchive.php" />
 <meta http-equiv="Content-language" content="en" />
			<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
			<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	var toggleImage = function(elem) {
		if ($(elem).hasClass("shown")) {
			$(elem).removeClass("shown").addClass("hidden");
			$("img", elem).attr("src", "/images/notes-add.gif");
		}
		else {
			$(elem).removeClass("hidden").addClass("shown");
			$("img", elem).attr("src", "/images/notes-reject.gif");
		}
	};

	$(".refsect1 h3.title").each(function() {
        url = "http://bugs.php.net/report.php?bug_type=Documentation+problem&amp;manpage=" + $(this).parent().parent().attr("id") + "%23" + $(this).text();
		$(this).parent().prepend("<div class='reportbug'><a href='" + url + "'>Report a bug</a></div>");
		$(this).prepend("<a class='toggler shown' href='#'><img src='/images/notes-reject.gif' alt='reject note' /></a> ");
	});
	$("#usernotes .head").each(function() {
		$(this).prepend("<a class='toggler shown' href='#'><img src='/images/notes-reject.gif' alt='reject note' /></a> ");
	});
	$(".refsect1 h3.title .toggler").click(function() {
		$(this).parent().siblings().slideToggle("slow");
		toggleImage(this);
		return false;
	});
	$("#usernotes .head .toggler").click(function() {
		$(this).parent().next().slideToggle("slow");
		toggleImage(this);
		return false;
	});
});
</script>

</head>
<body>

<div id="headnav">
 <a href="/" rel="home"><img src="http://static.php.net/www.php.net/images/php.gif"
 alt="PHP" width="120" height="67" id="phplogo" /></a>
 <div id="headmenu">
  <a href="/downloads.php">downloads</a> |
  <a href="/docs.php">documentation</a> |
  <a href="/FAQ.php">faq</a> |
  <a href="/support.php">getting help</a> |
  <a href="/mailing-lists.php">mailing lists</a> |
  <a href="/license">licenses</a> |
  <a href="http://wiki.php.net/">wiki</a> |
  <a href="http://bugs.php.net/">reporting bugs</a> |
  <a href="/sites.php">php.net sites</a> |
  <a href="/links.php">links</a> |
  <a href="/conferences/">conferences</a> |
  <a href="/my.php">my php.net</a>
 </div>
</div>

<div id="headsearch">
 <form method="post" action="/search.php" id="topsearch">
  <p>
   <span title="Keyboard shortcut: Alt+S (Win), Ctrl+S (Apple)">
    <span class="shortkey">s</span>earch for
   </span>
   <input type="text" name="pattern" value="" size="30" accesskey="s" />
   <span>in the</span>
   <select name="show">
    <option value="all"      >all php.net sites</option>
    <option value="local"    >this mirror only</option>
    <option value="quickref" selected="selected">function list</option>
    <option value="manual"   >online documentation</option>
    <option value="bugdb"    >bug database</option>
    <option value="news_archive">Site News Archive</option>
    <option value="changelogs">All Changelogs</option>
    <option value="pear"     >just pear.php.net</option>
    <option value="pecl"     >just pecl.php.net</option>
    <option value="talks"    >just talks.php.net</option>
    <option value="maillist" >general mailing list</option>
    <option value="devlist"  >developer mailing list</option>
    <option value="phpdoc"   >documentation mailing list</option>
   </select>
   <input type="image"
          src="http://static.php.net/www.php.net/images/small_submit_white.gif"
          class="submit" alt="search" />
   <input type="hidden" name="lang" value="en" />
  </p>
 </form>
</div>

<div id="layout_2">
 <div id="leftbar">
<!--UdmComment-->
<ul class="toc">
 <li class="header home"><a href="index.php">PHP Manual</a></li>
 <li class="header up"><a href="funcref.php">Function Reference</a></li>
 <li class="header up"><a href="refs.compression.php">Compression and Archive Extensions</a></li>
 <li class="header up"><a href="book.zip.php">Zip</a></li>
 <li><a href="intro.zip.php">Introduction</a></li>
 <li><a href="zip.setup.php">Installing/Configuring</a></li>
 <li><a href="zip.constants.php">Predefined Constants</a></li>
 <li><a href="zip.examples.php">Examples</a></li>
 <li class="active"><a href="class.ziparchive.php">ZipArchive</a></li>
 <li><a href="ref.zip.php">Zip Functions</a></li>
</ul><!--/UdmComment-->

 </div>
 <div id="content" class="manual/en">
<!--UdmComment-->
<div class="manualnavbar manualnavbar_top">
 <span class="next">
  <a href="function.ziparchive-addemptydir.php">ZipArchive::addEmptyDir<img src="http://static.php.net/www.php.net/images/caret-r.gif" alt="&gt;" width="11" height="7" /></a>
 </span>
 <span class="prev">
  <a href="zip.examples.php"><img src="http://static.php.net/www.php.net/images/caret-l.gif" alt="&lt;" width="11" height="7" />Examples</a>
 </span>
 <hr />
 <span class="lastupdated">[<a href="https://edit.php.net/?project=PHP&amp;perm=en/class.ziparchive.php">edit</a>] Last updated: Fri, 01 Jul 2011</span>
 <div class="langchooser">
  <form action="/manual/change.php" method="get">
   <p>view this page in </p><fieldset><select name="page">
    <option value="pt_BR/class.ziparchive.php">Brazilian Portuguese</option>
    <option value="zh/class.ziparchive.php">Chinese (Simplified)</option>
    <option value="fr/class.ziparchive.php">French</option>
    <option value="de/class.ziparchive.php">German</option>
    <option value="ja/class.ziparchive.php">Japanese</option>
    <option value="pl/class.ziparchive.php">Polish</option>
    <option value="ro/class.ziparchive.php">Romanian</option>
    <option value="fa/class.ziparchive.php">Persian</option>
    <option value="es/class.ziparchive.php">Spanish</option>
    <option value="tr/class.ziparchive.php">Turkish</option>
    <option value="help-translate.php">Other</option>
   </select>
   <input type="image" src="http://static.php.net/www.php.net/images/small_submit.gif" id="changeLangImage" alt="Change language" />
  </fieldset></form>
 </div>
</div>
<!--/UdmComment-->

<div id="class.ziparchive" class="reference">
 <h1 class="title">The <a href="class.ziparchive.php" class="classname">ZipArchive</a> class</h1>
 
 
 <div class="partintro">
 

  <div class="section" id="ziparchive.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    A file archive, compressed with Zip.
   </p>
  </div>

 
  <div class="section" id="ziparchive.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis">
    <div class="ooclass"></div>


    <div class="classsynopsisinfo">
     <span class="ooclass">
      <b class="classname">ZipArchive</b>
     </span>
     {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Properties */</div>

    
    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="methodsynopsis dc-description">
   <span class="type">bool</span> <span class="methodname"><a href="function.ziparchive-addemptydir.php" class="methodname">addEmptyDir</a></span>
    ( <span class="methodparam"><span class="type">string</span> <tt class="parameter">$dirname</tt></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="type">bool</span> <span class="methodname"><a href="function.ziparchive-addfile.php" class="methodname">addFile</a></span>
    ( <span class="methodparam"><span class="type">string</span> <tt class="parameter">$filename</tt></span>
   [, <span class="methodparam"><span class="type">string</span> <tt class="parameter">$localname</tt><span class="initializer"> = <b><tt>NULL</tt></b></span></span>
   [, <span class="methodparam"><span class="type">int</span> <tt class="parameter">$start</tt><span class="initializer"> = 0</span></span>
   [, <span class="methodparam"><span class="type">int</span> <tt class="parameter">$length</tt><span class="initializer"> = 0</span></span>
  ]]] )</div>
<div class="methodsynopsis dc-description">
   <span class="type">bool</span> <span class="methodname"><a href="function.ziparchive-addfromstring.php" class="methodname">addFromString</a></span>
    ( <span class="methodparam"><span class="type">string</span> <tt class="parameter">$localname</tt></span>
   , <span class="methodparam"><span class="type">string</span> <tt class="parameter">$contents</tt></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="type">bool</span> <span class="methodname"><a href="function.ziparchive-close.php" class="methodname">close</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="type">bool</span> <span class="methodname"><a href="function.ziparchive-deleteindex.php" class="methodname">deleteIndex</a></span>
    ( <span class="methodparam"><span class="type">int</span> <tt class="parameter">$index</tt></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="type">bool</span> <span class="methodname"><a href="function.ziparchive-deletename.php" class="methodname">deleteName</a></span>
    ( <span class="methodparam"><span class="type">string</span> <tt class="parameter">$name</tt></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="type">bool</span> <span class="methodname"><a href="function.ziparchive-extractto.php" class="methodname">extractTo</a></span>
    ( <span class="methodparam"><span class="type">string</span> <tt class="parameter">$destination</tt></span>
   [, <span class="methodparam"><span class="type"><a href="language.pseudo-types.php#language.types.mixed" class="type mixed">mixed</a></span> <tt class="parameter">$entries</tt></span>
  ] )</div>
<div class="methodsynopsis dc-description">
   <span class="type">string</span> <span class="methodname"><a href="function.ziparchive-getarchivecomment.php" class="methodname">getArchiveComment</a></span>
    ([ <span class="methodparam"><span class="type">int</span> <tt class="parameter">$flags</tt></span>
  ] )</div>
<div class="methodsynopsis dc-description">
   <span class="type">string</span> <span class="methodname"><a href="function.ziparchive-getcommentindex.php" class="methodname">getCommentIndex</a></span>
    ( <span class="methodparam"><span class="type">int</span> <tt class="parameter">$index</tt></span>
   [, <span class="methodparam"><span class="type">int</span> <tt class="parameter">$flags</tt></span>
  ] )</div>
<div class="methodsynopsis dc-description">
   <span class="type">string</span> <span class="methodname"><a href="function.ziparchive-getcommentname.php" class="methodname">getCommentName</a></span>
    ( <span class="methodparam"><span class="type">string</span> <tt class="parameter">$name</tt></span>
   [, <span class="methodparam"><span class="type">int</span> <tt class="parameter">$flags</tt></span>
  ] )</div>
<div class="methodsynopsis dc-description">
   <span class="type">mixed</span> <span class="methodname"><a href="function.ziparchive-getfromindex.php" class="methodname">getFromIndex</a></span>
    ( <span class="methodparam"><span class="type">int</span> <tt class="parameter">$index</tt></span>
   [, <span class="methodparam"><span class="type">int</span> <tt class="parameter">$length</tt><span class="initializer"> = 0</span></span>
   [, <span class="methodparam"><span class="type">int</span> <tt class="parameter">$flags</tt></span>
  ]] )</div>
<div class="methodsynopsis dc-description">
   <span class="type">mixed</span> <span class="methodname"><a href="function.ziparchive-getfromname.php" class="methodname">getFromName</a></span>
    ( <span class="methodparam"><span class="type">string</span> <tt class="parameter">$name</tt></span>
   [, <span class="methodparam"><span class="type">int</span> <tt class="parameter">$length</tt><span class="initializer"> = 0</span></span>
   [, <span class="methodparam"><span class="type">int</span> <tt class="parameter">$flags</tt></span>
  ]] )</div>
<div class="methodsynopsis dc-description">
   <span class="type">string</span> <span class="methodname"><a href="function.ziparchive-getnameindex.php" class="methodname">getNameIndex</a></span>
    ( <span class="methodparam"><span class="type">int</span> <tt class="parameter">$index</tt></span>
   [, <span class="methodparam"><span class="type">int</span> <tt class="parameter">$flags</tt></span>
  ] )</div>
<div class="methodsynopsis dc-description">
   <span class="type">string</span> <span class="methodname"><a href="function.ziparchive-getstatusstring.php" class="methodname">getStatusString</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="type">resource</span> <span class="methodname"><a href="function.ziparchive-getstream.php" class="methodname">getStream</a></span>
    ( <span class="methodparam"><span class="type">string</span> <tt class="parameter">$name</tt></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="type">mixed</span> <span class="methodname"><a href="function.ziparchive-locatename.php" class="methodname">locateName</a></span>
    ( <span class="methodparam"><span class="type">string</span> <tt class="parameter">$name</tt></span>
   [, <span class="methodparam"><span class="type">int</span> <tt class="parameter">$flags</tt></span>
  ] )</div>
<div class="methodsynopsis dc-description">
   <span class="type">mixed</span> <span class="methodname"><a href="function.ziparchive-open.php" class="methodname">open</a></span>
    ( <span class="methodparam"><span class="type">string</span> <tt class="parameter">$filename</tt></span>
   [, <span class="methodparam"><span class="type">int</span> <tt class="parameter">$flags</tt></span>
  ] )</div>
<div class="methodsynopsis dc-description">
   <span class="type">bool</span> <span class="methodname"><a href="function.ziparchive-renameindex.php" class="methodname">renameIndex</a></span>
    ( <span class="methodparam"><span class="type">int</span> <tt class="parameter">$index</tt></span>
   , <span class="methodparam"><span class="type">string</span> <tt class="parameter">$newname</tt></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="type">bool</span> <span class="methodname"><a href="function.ziparchive-renamename.php" class="methodname">renameName</a></span>
    ( <span class="methodparam"><span class="type">string</span> <tt class="parameter">$name</tt></span>
   , <span class="methodparam"><span class="type">string</span> <tt class="parameter">$newname</tt></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="type">mixed</span> <span class="methodname"><a href="function.ziparchive-setarchivecomment.php" class="methodname">setArchiveComment</a></span>
    ( <span class="methodparam"><span class="type">string</span> <tt class="parameter">$comment</tt></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="type">mixed</span> <span class="methodname"><a href="function.ziparchive-setcommentindex.php" class="methodname">setCommentIndex</a></span>
    ( <span class="methodparam"><span class="type">int</span> <tt class="parameter">$index</tt></span>
   , <span class="methodparam"><span class="type">string</span> <tt class="parameter">$comment</tt></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="type">mixed</span> <span class="methodname"><a href="function.ziparchive-setCommentName.php" class="methodname">setCommentName</a></span>
    ( <span class="methodparam"><span class="type">string</span> <tt class="parameter">$name</tt></span>
   , <span class="methodparam"><span class="type">string</span> <tt class="parameter">$comment</tt></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="type">mixed</span> <span class="methodname"><a href="function.ziparchive-statindex.php" class="methodname">statIndex</a></span>
    ( <span class="methodparam"><span class="type">int</span> <tt class="parameter">$index</tt></span>
   [, <span class="methodparam"><span class="type">int</span> <tt class="parameter">$flags</tt></span>
  ] )</div>
<div class="methodsynopsis dc-description">
   <span class="type">mixed</span> <span class="methodname"><a href="function.ziparchive-statname.php" class="methodname">statName</a></span>
    ( <span class="methodparam"><span class="type"><span class="type name">name</span></span> <tt class="parameter">$name</tt></span>
   [, <span class="methodparam"><span class="type">int</span> <tt class="parameter">$flags</tt></span>
  ] )</div>
<div class="methodsynopsis dc-description">
   <span class="type">mixed</span> <span class="methodname"><a href="function.ziparchive-unchangeall.php" class="methodname">unchangeAll</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="type">mixed</span> <span class="methodname"><a href="function.ziparchive-unchangearchive.php" class="methodname">unchangeArchive</a></span>
    ( <span class="methodparam">void</span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="type">mixed</span> <span class="methodname"><a href="function.ziparchive-unchangeindex.php" class="methodname">unchangeIndex</a></span>
    ( <span class="methodparam"><span class="type">int</span> <tt class="parameter">$index</tt></span>
   )</div>
<div class="methodsynopsis dc-description">
   <span class="type">mixed</span> <span class="methodname"><a href="function.ziparchive-unchangename.php" class="methodname">unchangeName</a></span>
    ( <span class="methodparam"><span class="type">string</span> <tt class="parameter">$name</tt></span>
   )</div>

    
   }</div>


  </div>


  <div class="section" id="ziparchive.props">
   <h2 class="title">Properties</h2>
   <dl>

    <dt id="ziparchive.props.status">
     <span class="term"><var class="varname"><var class="varname">status</var></var></span>
     <dd>

      <p class="para">Status of the Zip Archive</p>
     </dd>

    </dt>

    <dt id="ziparchive.props.statussys">
     <span class="term"><var class="varname"><var class="varname">statusSys</var></var></span>
     <dd>

      <p class="para">System status of the Zip Archive</p>
     </dd>

    </dt>

    <dt id="ziparchive.props.numfiles">
     <span class="term"><var class="varname"><var class="varname">numFiles</var></var></span>
     <dd>

      <p class="para">Number of files in archive</p>
     </dd>

    </dt>

    <dt id="ziparchive.props.filename">
     <span class="term"><var class="varname"><var class="varname">filename</var></var></span>
     <dd>

      <p class="para">File name in the file system</p>
     </dd>

    </dt>

    <dt id="ziparchive.props.comment">
     <span class="term"><var class="varname"><var class="varname">comment</var></var></span>
     <dd>

      <p class="para">Comment for the archive</p>
     </dd>

    </dt>

   </dl>

  </div>

 </div>


 










































































































































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="function.ziparchive-addemptydir.php">ZipArchive::addEmptyDir</a> — Add a new directory</li><li><a href="function.ziparchive-addfile.php">ZipArchive::addFile</a> — Adds a file to a ZIP archive from the given path</li><li><a href="function.ziparchive-addfromstring.php">ZipArchive::addFromString</a> — Add a file to a ZIP archive using its contents</li><li><a href="function.ziparchive-close.php">ZipArchive::close</a> — Close the active archive (opened or newly created)</li><li><a href="function.ziparchive-deleteindex.php">ZipArchive::deleteIndex</a> — delete an entry in the archive using its index</li><li><a href="function.ziparchive-deletename.php">ZipArchive::deleteName</a> — delete an entry in the archive using its name</li><li><a href="function.ziparchive-extractto.php">ZipArchive::extractTo</a> — Extract the archive contents</li><li><a href="function.ziparchive-getarchivecomment.php">ZipArchive::getArchiveComment</a> — Returns the Zip archive comment</li><li><a href="function.ziparchive-getcommentindex.php">ZipArchive::getCommentIndex</a> — Returns the comment of an entry using the entry index</li><li><a href="function.ziparchive-getcommentname.php">ZipArchive::getCommentName</a> — Returns the comment of an entry using the entry name</li><li><a href="function.ziparchive-getfromindex.php">ZipArchive::getFromIndex</a> — Returns the entry contents using its index</li><li><a href="function.ziparchive-getfromname.php">ZipArchive::getFromName</a> — Returns the entry contents using its name</li><li><a href="function.ziparchive-getnameindex.php">ZipArchive::getNameIndex</a> — Returns the name of an entry using its index</li><li><a href="function.ziparchive-getstatusstring.php">ZipArchive::getStatusString</a> — Returns the status error message, system and/or zip messages</li><li><a href="function.ziparchive-getstream.php">ZipArchive::getStream</a> — Get a file handler to the entry defined by its name (read only).</li><li><a href="function.ziparchive-locatename.php">ZipArchive::locateName</a> — Returns the index of the entry in the archive</li><li><a href="function.ziparchive-open.php">ZipArchive::open</a> — Open a ZIP file archive</li><li><a href="function.ziparchive-renameindex.php">ZipArchive::renameIndex</a> — Renames an entry defined by its index</li><li><a href="function.ziparchive-renamename.php">ZipArchive::renameName</a> — Renames an entry defined by its name</li><li><a href="function.ziparchive-setarchivecomment.php">ZipArchive::setArchiveComment</a> — Set the comment of a ZIP archive</li><li><a href="function.ziparchive-setcommentindex.php">ZipArchive::setCommentIndex</a> — Set the comment of an entry defined by its index</li><li><a href="function.ziparchive-setCommentName.php">ZipArchive::setCommentName</a> — Set the comment of an entry defined by its name</li><li><a href="function.ziparchive-statindex.php">ZipArchive::statIndex</a> — Get the details of an entry defined by its index.</li><li><a href="function.ziparchive-statname.php">ZipArchive::statName</a> — Get the details of an entry defined by its name.</li><li><a href="function.ziparchive-unchangeall.php">ZipArchive::unchangeAll</a> — Undo all changes done in the archive</li><li><a href="function.ziparchive-unchangearchive.php">ZipArchive::unchangeArchive</a> — Revert all global changes done in the archive.</li><li><a href="function.ziparchive-unchangeindex.php">ZipArchive::unchangeIndex</a> — Revert all changes done to an entry at the given index</li><li><a href="function.ziparchive-unchangename.php">ZipArchive::unchangeName</a> — Revert all changes done to an entry with the given name.</li></ul>
</div>
<br /><br />
<div id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.ziparchive&amp;redirect=http://www.php.net/manual/en/class.ziparchive.php"><img src="http://static.php.net/www.php.net/images/notes-add.gif" alt="add a note" width="13" height="13" class="middle" /></a> <small><a href="/manual/add-note.php?sect=class.ziparchive&amp;redirect=http://www.php.net/manual/en/class.ziparchive.php">add a note</a></small></span>
  <small>User Contributed Notes</small>
  <strong>ZipArchive</strong>
 </div><div id="allnotes">
 <a name="100268"></a>
 <div class="note">
  <strong class='user'>h-fate at gmx dot net</strong>
  <a href="#100268" class="date">05-Oct-2010 11:17</a>
  <div class="text">
<div class="phpcode"><code><span class="html">
Be wary that there are several algorithms to generate a zip file. I found that Office OpenXML files created with ZipArchive are not recognized by Excel 2007, for example.<br />
<br />
You have to use a different class to zip in this case, such as PclZip.</span>
</code></div>
  </div>
 </div>
 <a name="98441"></a>
 <div class="note">
  <strong class='user'>hardcorevenom at gmx dot com</strong>
  <a href="#98441" class="date">15-Jun-2010 10:17</a>
  <div class="text">
<div class="phpcode"><code><span class="html">
Read a file from an archive to a variable.<br />
A warning is printed automatically in case of a CRC32 mismatch, which we capture, so we can print our own error message.<br />
<br />
<span class="default">&lt;?php<br />
$zip </span><span class="keyword">= new </span><span class="default">ZipArchive</span><span class="keyword">();<br />
if (</span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">open</span><span class="keyword">(</span><span class="string">'archive.zip'</span><span class="keyword">)) {<br />
&nbsp; </span><span class="default">$fp </span><span class="keyword">= </span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">getStream</span><span class="keyword">(</span><span class="string">'myfile.txt'</span><span class="keyword">); </span><span class="comment">//file inside archive<br />
&nbsp; </span><span class="keyword">if(!</span><span class="default">$fp</span><span class="keyword">)<br />
&nbsp;&nbsp;&nbsp; die(</span><span class="string">"Error: can't get stream to zipped file"</span><span class="keyword">);<br />
&nbsp; </span><span class="default">$stat </span><span class="keyword">= </span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">statName</span><span class="keyword">(</span><span class="string">'myfile.txt'</span><span class="keyword">);<br />
<br />
&nbsp; </span><span class="default">$buf </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">; </span><span class="comment">//file buffer<br />
&nbsp; </span><span class="default">ob_start</span><span class="keyword">(); </span><span class="comment">//to capture CRC error message<br />
&nbsp;&nbsp;&nbsp; </span><span class="keyword">while (!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">)) {<br />
&nbsp;&nbsp; &nbsp;&nbsp; </span><span class="default">$buf </span><span class="keyword">.= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">2048</span><span class="keyword">); </span><span class="comment">//reading more than 2156 bytes seems to disable internal CRC32 verification (bug?)<br />
&nbsp;&nbsp;&nbsp; </span><span class="keyword">}<br />
&nbsp;&nbsp;&nbsp; </span><span class="default">$s </span><span class="keyword">= </span><span class="default">ob_get_contents</span><span class="keyword">();<br />
&nbsp; </span><span class="default">ob_end_clean</span><span class="keyword">();<br />
&nbsp; if(</span><span class="default">stripos</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">, </span><span class="string">"CRC error"</span><span class="keyword">) != </span><span class="default">FALSE</span><span class="keyword">){<br />
&nbsp;&nbsp;&nbsp; echo </span><span class="string">'CRC32 mismatch, current '</span><span class="keyword">;<br />
&nbsp;&nbsp;&nbsp; </span><span class="default">printf</span><span class="keyword">(</span><span class="string">"%08X"</span><span class="keyword">, </span><span class="default">crc32</span><span class="keyword">(</span><span class="default">$buf</span><span class="keyword">)); </span><span class="comment">//current CRC<br />
&nbsp;&nbsp;&nbsp; </span><span class="keyword">echo </span><span class="string">', expected '</span><span class="keyword">;<br />
&nbsp;&nbsp;&nbsp; </span><span class="default">printf</span><span class="keyword">(</span><span class="string">"%08X"</span><span class="keyword">, </span><span class="default">$stat</span><span class="keyword">[</span><span class="string">'crc'</span><span class="keyword">]); </span><span class="comment">//expected CRC<br />
&nbsp; </span><span class="keyword">}<br />
<br />
&nbsp; </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);<br />
&nbsp; </span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();<br />
&nbsp; </span><span class="comment">//Done, unpacked file is stored in $buf<br />
</span><span class="keyword">}<br />
</span><span class="default">?&gt;<br />
</span><br />
To create a corrupt file, change a byte in a zip file using a hex editor.</span>
</code></div>
  </div>
 </div></div>

 <div class="foot"><a href="/manual/add-note.php?sect=class.ziparchive&amp;redirect=http://www.php.net/manual/en/class.ziparchive.php"><img src="http://static.php.net/www.php.net/images/notes-add.gif" alt="add a note" width="13" height="13" class="middle" /></a> <small><a href="/manual/add-note.php?sect=class.ziparchive&amp;redirect=http://www.php.net/manual/en/class.ziparchive.php">add a note</a></small></div>
</div><br />
 </div>
 <div class="cleaner">&nbsp;</div>
</div>

<div id="footnav">
   <a href="/source.php?url=/manual/en/class.ziparchive.php">show source</a> |
 <a href="/credits.php">credits</a> |
 <a href="/stats/">stats</a> |
 <a href="/sitemap.php">sitemap</a> |
 <a href="/contact.php">contact</a> |
 <a href="/contact.php#ads">advertising</a> |
 <a href="/mirrors.php">mirror sites</a>
</div>

<div id="pagefooter">
 <div id="copyright">
  <a href="/copyright.php">Copyright &copy; 2001-2011 The PHP Group</a><br />
  All rights reserved.
 </div>

 <div id="thismirror">
  <a href="/mirror.php">This mirror</a> generously provided by:
  <a href="http://developer.yahoo.com/">Yahoo! Inc.</a><br />
  Last updated: Tue Jul  5 15:01:43 2011 UTC
 </div>
</div>
<!--[if IE 6]>
<script type="text/javascript"> 
    /*Load jQuery if not already loaded*/ if(typeof jQuery == 'undefined'){ document.write("<script type=\"text/javascript\"   src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js\"></"+"script>"); var __noconflict = true; } 
    var IE6UPDATE_OPTIONS = {
        icons_path: "/ie6update/images/"
    }
</script>
<script type="text/javascript" src="/ie6update/ie6update.js"></script>
<![endif]-->
</body>
</html>