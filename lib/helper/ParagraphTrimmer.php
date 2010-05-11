<?php

  /**
   * Helper for rendering one or more paragraphs within a predefined number of
   * characters. If the paragraph extends the maximum number of characters it
   * will render the configured read more indicator.
   *
   * @author    Marijn Huizendveld <marijn@debaasmedia.nl>
   * @version   0.1
   *
   * @copyright De Baas Media (2010)
   */
  function trim_paragraph ($arg_content, $arg_maximumCharacters = 240, $arg_delimiter = '...')
  {
    return new dbmParagraphTrimmer($arg_content, $arg_maximumCharacters, $arg_delimiter);
  }