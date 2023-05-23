<br>
<font size="1"><table class="xdebug-error xe-uncaught-exception" dir="ltr" border="1" cellspacing="0" cellpadding="1">
<tr><th align="left" bgcolor="#f57900" colspan="5">
<span style="background-color: #cc0000; color: #fce94f; font-size: x-large;">( ! )</span> Fatal error: Uncaught Error: Call to undefined function Nextend\Framework\Platform\WordPress\is_admin() in C:\wamp64\www\wordpress\wp-content\plugins\smart-slider-3\Nextend\Framework\Platform\WordPress\PlatformWordPress.php on line <i>19</i>
</th></tr>
<tr><th align="left" bgcolor="#f57900" colspan="5">
<span style="background-color: #cc0000; color: #fce94f; font-size: x-large;">( ! )</span> Error: Call to undefined function Nextend\Framework\Platform\WordPress\is_admin() in C:\wamp64\www\wordpress\wp-content\plugins\smart-slider-3\Nextend\Framework\Platform\WordPress\PlatformWordPress.php on line <i>19</i>
</th></tr>
<tr><th align="left" bgcolor="#e9b96e" colspan="5">Call Stack</th></tr>
<tr>
<th align="center" bgcolor="#eeeeec">#</th>
<th align="left" bgcolor="#eeeeec">Time</th>
<th align="left" bgcolor="#eeeeec">Memory</th>
<th align="left" bgcolor="#eeeeec">Function</th>
<th align="left" bgcolor="#eeeeec">Location</th>
</tr>
<tr>
<td bgcolor="#eeeeec" align="center">1</td>
<td bgcolor="#eeeeec" align="center">0.0002</td>
<td bgcolor="#eeeeec" align="right">359480</td>
<td bgcolor="#eeeeec">{main}(  )</td>
<td title="C:\wamp64\www\wordpress\wp-content\plugins\smart-slider-3\Nextend\Autoloader.php" bgcolor="#eeeeec">...\Autoloader.php<b>:</b>0</td>
</tr>
<tr>
<td bgcolor="#eeeeec" align="center">2</td>
<td bgcolor="#eeeeec" align="center">0.0002</td>
<td bgcolor="#eeeeec" align="right">359480</td>
<td bgcolor="#eeeeec">Nextend\Autoloader::getInstance(  )</td>
<td title="C:\wamp64\www\wordpress\wp-content\plugins\smart-slider-3\Nextend\Autoloader.php" bgcolor="#eeeeec">...\Autoloader.php<b>:</b>203</td>
</tr>
<tr>
<td bgcolor="#eeeeec" align="center">3</td>
<td bgcolor="#eeeeec" align="center">0.0002</td>
<td bgcolor="#eeeeec" align="right">359576</td>
<td bgcolor="#eeeeec">Nextend\Autoloader->__construct(  )</td>
<td title="C:\wamp64\www\wordpress\wp-content\plugins\smart-slider-3\Nextend\Autoloader.php" bgcolor="#eeeeec">...\Autoloader.php<b>:</b>55</td>
</tr>
<tr>
<td bgcolor="#eeeeec" align="center">4</td>
<td bgcolor="#eeeeec" align="center">0.0033</td>
<td bgcolor="#eeeeec" align="right">375768</td>
<td bgcolor="#eeeeec">
<a href="http://www.php.net/function.call-user-func-array:{C:\wamp64\www\wordpress\wp-content\plugins\smart-slider-3\Nextend\Autoloader.php:45}" target="_new">call_user_func_array:{C:\wamp64\www\wordpress\wp-content\plugins\smart-slider-3\Nextend\Autoloader.php:45}</a>( <span>$callback = </span><span>[0 =&gt; &#39;\\Nextend\\SmartSlider3\\SmartSlider3&#39;, 1 =&gt; &#39;getInstance&#39;]</span>, <span>$args = </span><span>[]</span> )</td>
<td title="C:\wamp64\www\wordpress\wp-content\plugins\smart-slider-3\Nextend\Autoloader.php" bgcolor="#eeeeec">...\Autoloader.php<b>:</b>45</td>
</tr>
<tr>
<td bgcolor="#eeeeec" align="center">5</td>
<td bgcolor="#eeeeec" align="center">0.0033</td>
<td bgcolor="#eeeeec" align="right">375840</td>
<td bgcolor="#eeeeec">Nextend\SmartSlider3\SmartSlider3::getInstance(  )</td>
<td title="C:\wamp64\www\wordpress\wp-content\plugins\smart-slider-3\Nextend\Autoloader.php" bgcolor="#eeeeec">...\Autoloader.php<b>:</b>45</td>
</tr>
<tr>
<td bgcolor="#eeeeec" align="center">6</td>
<td bgcolor="#eeeeec" align="center">0.0033</td>
<td bgcolor="#eeeeec" align="right">375880</td>
<td bgcolor="#eeeeec">Nextend\SmartSlider3\SmartSlider3->__construct(  )</td>
<td title="C:\wamp64\www\wordpress\wp-content\plugins\smart-slider-3\Nextend\Framework\Pattern\SingletonTrait.php" bgcolor="#eeeeec">...\SingletonTrait.php<b>:</b>12</td>
</tr>
<tr>
<td bgcolor="#eeeeec" align="center">7</td>
<td bgcolor="#eeeeec" align="center">0.0033</td>
<td bgcolor="#eeeeec" align="right">375880</td>
<td bgcolor="#eeeeec">Nextend\SmartSlider3\SmartSlider3->init(  )</td>
<td title="C:\wamp64\www\wordpress\wp-content\plugins\smart-slider-3\Nextend\Framework\Pattern\SingletonTrait.php" bgcolor="#eeeeec">...\SingletonTrait.php<b>:</b>16</td>
</tr>
<tr>
<td bgcolor="#eeeeec" align="center">8</td>
<td bgcolor="#eeeeec" align="center">0.0033</td>
<td bgcolor="#eeeeec" align="right">375880</td>
<td bgcolor="#eeeeec">Nextend\Autoloader->loadClass( <span>$class = </span><span>&#39;Nextend\\Framework\\Platform\\Platform&#39;</span> )</td>
<td title="C:\wamp64\www\wordpress\wp-content\plugins\smart-slider-3\Nextend\SmartSlider3\SmartSlider3.php" bgcolor="#eeeeec">...\SmartSlider3.php<b>:</b>30</td>
</tr>
<tr>
<td bgcolor="#eeeeec" align="center">9</td>
<td bgcolor="#eeeeec" align="center">0.0033</td>
<td bgcolor="#eeeeec" align="right">375976</td>
<td bgcolor="#eeeeec">Nextend\Autoloader->loadMappedFile( <span>$prefix = </span><span>&#39;Nextend\\&#39;</span>, <span>$relative_class = </span><span>&#39;Framework\\Platform\\Platform&#39;</span> )</td>
<td title="C:\wamp64\www\wordpress\wp-content\plugins\smart-slider-3\Nextend\Autoloader.php" bgcolor="#eeeeec">...\Autoloader.php<b>:</b>128</td>
</tr>
<tr>
<td bgcolor="#eeeeec" align="center">10</td>
<td bgcolor="#eeeeec" align="center">0.0033</td>
<td bgcolor="#eeeeec" align="right">376104</td>
<td bgcolor="#eeeeec">Nextend\Autoloader->requireFile( <span>$file = </span><span>&#39;C:\\wamp64\\www\\wordpress\\wp-content\\plugins\\smart-slider-3\\Nextend/Framework/Platform/Platform.php&#39;</span> )</td>
<td title="C:\wamp64\www\wordpress\wp-content\plugins\smart-slider-3\Nextend\Autoloader.php" bgcolor="#eeeeec">...\Autoloader.php<b>:</b>175</td>
</tr>
<tr>
<td bgcolor="#eeeeec" align="center">11</td>
<td bgcolor="#eeeeec" align="center">0.0035</td>
<td bgcolor="#eeeeec" align="right">378016</td>
<td bgcolor="#eeeeec">require( <font color="#00bb00">'C:\wamp64\www\wordpress\wp-content\plugins\smart-slider-3\Nextend\Framework\Platform\Platform.php</font> )</td>
<td title="C:\wamp64\www\wordpress\wp-content\plugins\smart-slider-3\Nextend\Autoloader.php" bgcolor="#eeeeec">...\Autoloader.php<b>:</b>194</td>
</tr>
<tr>
<td bgcolor="#eeeeec" align="center">12</td>
<td bgcolor="#eeeeec" align="center">0.0035</td>
<td bgcolor="#eeeeec" align="right">378072</td>
<td bgcolor="#eeeeec">Nextend\Framework\Platform\Platform::getInstance(  )</td>
<td title="C:\wamp64\www\wordpress\wp-content\plugins\smart-slider-3\Nextend\Framework\Platform\Platform.php" bgcolor="#eeeeec">...\Platform.php<b>:</b>89</td>
</tr>
<tr>
<td bgcolor="#eeeeec" align="center">13</td>
<td bgcolor="#eeeeec" align="center">0.0035</td>
<td bgcolor="#eeeeec" align="right">378112</td>
<td bgcolor="#eeeeec">Nextend\Framework\Platform\Platform->__construct(  )</td>
<td title="C:\wamp64\www\wordpress\wp-content\plugins\smart-slider-3\Nextend\Framework\Pattern\SingletonTrait.php" bgcolor="#eeeeec">...\SingletonTrait.php<b>:</b>12</td>
</tr>
<tr>
<td bgcolor="#eeeeec" align="center">14</td>
<td bgcolor="#eeeeec" align="center">0.0038</td>
<td bgcolor="#eeeeec" align="right">382784</td>
<td bgcolor="#eeeeec">Nextend\Framework\Platform\WordPress\PlatformWordPress->__construct(  )</td>
<td title="C:\wamp64\www\wordpress\wp-content\plugins\smart-slider-3\Nextend\Framework\Platform\Platform.php" bgcolor="#eeeeec">...\Platform.php<b>:</b>19</td>
</tr>
</table></font>