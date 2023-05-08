<?php
/**Find the errors in this PHP program:
 * <? php
 * print 'How are you?';
 * print 'i'm fine.';
 * ??>
 */

 /** Answer:
  * 1. The opening PHP tag should be just <?php with no space between the <? and php
  * 2. Because the string I'm fine cointains a ', it should be surrounded by double quotes ("I'm fine")
  * or the ' should be escaped ('I\'m fine').
  * 3. The closing PHP tag should be ?>, not ??>. Or, if this code were the last thing in is file,
  * the closing PHP tag should be omitted.
  */
  print 'How are you?';
  print "I'm fine."
?>