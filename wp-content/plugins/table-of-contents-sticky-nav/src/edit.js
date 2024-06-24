import { InspectorControls, useBlockProps } from '@wordpress/block-editor';
import { PanelBody, SelectControl } from "@wordpress/components";
import React from 'react';

export const edit = ( { attributes, setAttributes } ) => {
	const blockProperties = useBlockProps();
	const { listStyleType } = attributes;
	const options = [
		{ label: 'Unstyled', value: 'unstyled' },
		{ label: 'Bulleted', value: 'bulleted' },
		{ label: 'Numbered', value: 'numbered' },
	];

	return (
		<>
			<InspectorControls key="list-style-options">
				<PanelBody title="List Style Options">
					<SelectControl
						label="Select a list style type"
						options={options}
						value={listStyleType}
						onChange={(value) => setAttributes({
							listStyleType: value
						})} />
				</PanelBody>
			</InspectorControls>
			<section {...blockProperties}>
				<>
					<strong>Table of Contents Block</strong>
					<p>Outputs a sticky anchor based scroll navigation.</p>
				</>
			</section>
		</>
	);
};
