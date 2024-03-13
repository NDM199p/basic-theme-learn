import * as React from "react";
const SvgC = (props) => (
  <svg
    xmlns="http://www.w3.org/2000/svg"
    width={19}
    height={20}
    fill="none"
    {...props}
  >
    <g
      stroke="#fff"
      strokeLinecap="round"
      strokeLinejoin="round"
      strokeWidth={1.5}
    >
      <path d="M9.5 18.333a8.333 8.333 0 1 0 0-16.667 8.333 8.333 0 0 0 0 16.667" />
      <path d="M12 8.148s-1.03-1.481-2.745-1.481S6.167 8.148 6.167 10s1.372 3.333 3.088 3.333S12 11.852 12 11.852" />
    </g>
  </svg>
);
export default SvgC;
