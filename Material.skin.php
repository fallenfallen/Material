<?php
/**
 * Skin file for Material skin
 *
 * @file
 * @ingroup Skins
 */
 
// SkinTemplate class
class SkinMaterial extends SkinTemplate {
        public $skinname = 'material', 
                $stylename = 'Material',
                $template = 'MaterialTemplate', 
                $useHeadElement = true;
        
        //Add JS via ResourceLoader
        
        
        //Add CSS via ResourceLoader
        function setupSkinUserCss( OutputPage $out ) {
		parent::setupSkinUserCss( $out );
		$out->addModuleStyles( array(
			'mediawiki.skinning.interface', 'skins.material'
		) );
	}
 }
 
// BaseTemplate class
class MaterialTemplate extends BaseTemplate {
        public function execute() {
		$this->html( 'headelement' );
		?>
		<header>
			
		</header>
		<div class="mw-body-content">
		        <?php $this->html( 'bodytext' ) ?>
		</div>
		<footer>
			
		</footer>
		<?php
		$this->printTrail();
		echo Html::closeElement( 'body' );
		echo Html::closeElement( 'html' );
	}
}