import { registerBlockStyle, unregisterBlockStyle } from "@wordpress/blocks";
import { __ } from "@wordpress/i18n";

const layoutStyleButton = [
  {
    name: "layout-border-blue-fill",
    label: __("Blue outline", "aquila"),
  },
  {
    name: "layout-border-white-no-fill",
    label: __("White outline - to be used with dark background", "aquila"),
  },
];

const register = (styles) => {
  registerBlockStyle("core/button", styles);
};

wp.domReady(function () {
  layoutStyleButton.map((value) => register(value));

  // unregister button oulined
  unregisterBlockStyle("core/button", "outline");
});
