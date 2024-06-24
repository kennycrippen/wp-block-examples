import { InspectorControls, useBlockProps } from '@wordpress/block-editor';
import { PanelBody, PanelRow, TextControl } from '@wordpress/components';
import {__} from '@wordpress/i18n';
import React from 'react';

import './editor.scss';

export const edit = ({attributes, setAttributes}) => {
	const blockProperties = useBlockProps(); // NOSONAR
	const { printText = '' } = attributes;

	return (
		<>
			<InspectorControls>
				<PanelBody
					title={__('Social Share', 'kdc-social-share')}
					initialOpen={true}
				>
					<PanelRow>
						<TextControl
							label={__("Print Button Text")}
							value={printText}
							onChange={(value) => setAttributes({ printText: value })}
							help={__("The text to output within the Print list item.")}
						/>
					</PanelRow>
				</PanelBody>
			</InspectorControls>
			<section {...blockProperties}>
				<button class="is-style-outline-black button-admin-custom social-share-admin">
					Share This<span class="is-icon icon-chevron-down"></span>
				</button>
			</section>
		</>
	);
};
