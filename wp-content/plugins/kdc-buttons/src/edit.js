import { InnerBlocks, useBlockProps, InspectorControls } from "@wordpress/block-editor";
import React from "react";
import { __ } from '@wordpress/i18n';
import { PanelBody, PanelRow, ToggleControl } from '@wordpress/components';

import './editor.scss';

const allowedBlocks = [
	'kdc/kdc-button',
];

const blockTemplate = [
	['kdc/kdc-button', {}],
];

export const edit = ( { attributes, setAttributes } ) => {
	const { threeUpLayout } = attributes;
	const blockProperties = useBlockProps();
	const threeUpClass = threeUpLayout ? ' is-three-up-layout' : '';
	blockProperties.className += " has-handle";
	blockProperties.className += threeUpClass;

	return (
		<>
			<InspectorControls>
				<PanelBody>
					<PanelRow>
						<ToggleControl
							label={__('3-up Layout', 'kdc-buttons')}
							checked={threeUpLayout}
							onChange={(value) => setAttributes({ threeUpLayout: value })}
							help={__('Set width of each button to one third of container width.', 'kdc-buttons')}
						/>
					</PanelRow>
				</PanelBody>
			</InspectorControls>
			<section {...blockProperties}>
				<div className="blockHandle">Buttons</div>
				<div className="kdc-a11y-buttons">
					<section className="kdc-buttons-inner">
						<InnerBlocks allowedBlocks={allowedBlocks} template={blockTemplate}/>
					</section>
				</div>
			</section>
		</>
	);
}
