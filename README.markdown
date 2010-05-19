#sfParagraphTrimmer

Helper for rendering one or more paragraphs within a predefined number of characters. If the paragraph extends the maximum number of characters it will render the configured read more indicator.

## Installation

    [php]
    <?php // ProjectConfiguration.php
    
      class ProjectConfiguration extends sfProjectConfiguration
      {
    
        public function setup ()
        {
          $this->enablePlugins(array('sfParagraphTrimmerPlugin'));
        }
    
      }

## Usage

    [php]
    <?php use_helper('ParagraphTrimmer'); ?>
    <p>
      <?php echo trim_paragraph($myParagraph, 240, link_to('Read more', '@my_route')); ?>
    </p>