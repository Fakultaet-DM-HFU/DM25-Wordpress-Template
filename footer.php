           
            <div id="sidebar">
                <!-- For Widgets -->
                <?php
                    dynamic_sidebar( 'Footer' );
                ?>
            </div>
            
            
        <div id="footer" class="window"> 
            <div id="banner">
        
                    <img src="<?php echo(get_template_directory_uri()); ?>/Banner.svg">
                    <p>                
                          <script type="text/javascript">
                                 /* bisZurFeier();

                                  function bisZurFeier() {                                                     
                                        jetzt = new Date();
                                        DM25 = new Date("Jun 13, 2015");
                                        msProTag = 24 * 60 * 60 * 1000 ;
                                        DifferenzTime = (DM25.getTime() - jetzt.getTime());
                                        e_daysLeft = DifferenzTime / msProTag;
                                        TageBis = Math.floor(e_daysLeft); //floor = Abrunden 

 
 document.write("Heute " + TageBis + " Tage bis zur Jubiläumsfeier!" );*/                        
                                      
                                      document.write("Danke, dass Sie mit dabei waren!" );                        

                                  /*} */

                          </script>             
                    </p> 
            
            </div><!-- ende banner -->            
            
            
            <div id="footer-hfu-logo">
                <a href="//hs-furtwangen.de" target="_blank">
                    <img src="<?php echo(get_template_directory_uri()); ?>/Logo_HFU.svg">
                </a>
            </div>

            <nav id="footernav">
                    <?php wp_nav_menu( array('theme_location' => 'footer-menu' )); ?>
            </nav>
            <aside id="sponsor">
                <p>
                Mit freundlicher Unterstützung unseres Platin-Sponsors
                
                
                <img src="<?php echo(get_template_directory_uri()); ?>/Sponsoren/KMS.png" alt="KMS"></img>
            </aside>
            
        </div><!-- ende footer -->
    </div><!-- vertical-center -->
</div><!-- wrapper -->   
 
<?php wp_footer(); ?> <!-- For PlugIns -->


<?php
    include_once "tracking.php";
?>
</body>
</html>
