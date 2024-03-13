import { __ } from "@wordpress/i18n";
import { registerBlockType } from "@wordpress/blocks";
import { ColorPalette, InspectorControls, RichText, useBlockProps } from "@wordpress/block-editor";
import { C, Cart1 } from "../../../icons";

registerBlockType("ecmmm/heading", {
  title: __("Heading with Icon", "ecmmm"),
  icon: "admin-customizer",
  description: __("Add Heading and select Icons", "ecmmm"),
  category: "ecmmm",

  attributes: {
    option: {
      type: "string",
      default: "Dos",
    },
    content: {
      type: "string",
      source: "html",
      selector: "h2",
    },
    bg_color: { type: "string", default: "#000000" },
    text_color: { type: "string", default: "#ffffff" },
  },

  edit: function ({ attributes, setAttributes }) {
    const blockProps = useBlockProps();
    console.log(blockProps);
    const onChangeBGColor = (hexColor) => {
      setAttributes({ bg_color: hexColor });
    };

    const onChangeTextColor = (hexColor) => {
      setAttributes({ text_color: hexColor });
    };

    return (
      <>
        <Cart1 color="green" />
        <RichText
          {...blockProps}
          tagName="h2" // The tag here is the element output and editable in the admin
          value={attributes.content} // Any existing content, either from the database or an attribute default
          allowedFormats={["core/bold", "core/italic"]} // Allow the content to be made bold or italic, but do not allow other formatting options
          onChange={(content) => setAttributes({ content })} // Store updated content as a block attribute
          placeholder={__("Heading...")} // Display this text before any content has been added by the user
        />

        <InspectorControls key="setting">
          <div id="gutenpride-controls">
            <fieldset>
              <legend className="blocks-base-control__label">
                {__("Background color", "gutenpride")}
              </legend>
              <ColorPalette // Element Tag for Gutenberg standard colour selector
                onChange={onChangeBGColor} // onChange event callback
              />
            </fieldset>
            <fieldset>
              <legend className="blocks-base-control__label">
                {__("Text color", "gutenpride")}
              </legend>
              <ColorPalette // Element Tag for Gutenberg standard colour selector
                onChange={onChangeTextColor} // onChange event callback
              />
            </fieldset>
          </div>
        </InspectorControls>
      </>
    );
  },
  save: function ({ attributes }) {
    const blockProps = useBlockProps.save();
    console.log("Save");
    return (
      <div {...blockProps}>
        <Cart1 color="green" />
        <p>Haha</p>
        <RichText.Content tagName="h2" value={attributes.content} />;
      </div>
    );
  },
});
