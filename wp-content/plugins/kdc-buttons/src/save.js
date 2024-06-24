import { InnerBlocks, useBlockProps } from "@wordpress/block-editor";
import React from "react";

export const save = ( { attributes } ) => {
	const blockProperties = useBlockProps.save();
	const { threeUpLayout } = attributes;
	const threeUpClass = threeUpLayout ? ' is-three-up-layout' : '';
	blockProperties.className += threeUpClass;

	return (
		<div {...blockProperties}>
			<InnerBlocks.Content/>
		</div>
	);
};
