import { __ } from "@wordpress/i18n";
import { registerBlockType } from "@wordpress/blocks";
import {
  ColorPalette,
  InnerBlocks,
  InspectorControls,
  RichText,
  useBlockProps,
} from "@wordpress/block-editor";
import { C, Cart1 } from "../../../icons";

const ALLOWED_BLOCKS = ["core/image", "core/paragraph"];

const DEFAULT_BLOCKS = ["core/paragraph", { placeholder: "Lorem ipsum..." }];

const TEMPLATE = [
  ["core/heading", { placeholder: "Book Title" }],
  ["core/paragraph", { placeholder: "Summary" }],
  [
    "core/group",
    {},
    [
      [
        "core/columns",
        {},
        [
          [
            "core/column",
            {},
            [
              ["core/image", {}],
              ["core/heading", { placeholder: "Book Title" }],
            ],
          ],
          [
            "core/column",
            {},
            [
              ["core/image", {}],
              ["core/heading", { placeholder: "Book Title" }],
            ],
          ],
        ],
      ],
    ],
  ],
];

registerBlockType("ecmmm/dos-and-donts", {
  title: __("Dos and Donts", "ecmmm"),
  icon: "admin-customizer",
  description: __("Add Heading and select Icons", "ecmmm"),
  category: "ecmmm",

  edit: function () {
    const blockProps = useBlockProps();

    return (
      <div {...blockProps}>
        <InnerBlocks orientation="horizontal" defaultBlock={DEFAULT_BLOCKS} template={TEMPLATE} />
      </div>
    );
  },
  save: function () {
    const blockProps = useBlockProps.save();

    return (
      <div {...blockProps}>
        <InnerBlocks.Content />
      </div>
    );
  },
});
