import React from 'react';
import { useBlockProps, InspectorControls } from "@wordpress/block-editor";
import { TextControl, ToggleControl, PanelBody,	PanelRow } from "@wordpress/components";
import { __ } from "@wordpress/i18n";

import './editor.scss';

/**
 * Breaks out editor controls into their own module.
 *
 */
function EditorControls( { attributes, setAttributes } ) {

	return (
		<InspectorControls>
			<PanelBody title={__("Button Text Options")}>
				<PanelRow>
					<TextControl
						label={__("a11y Before Text")}
						value={attributes.beforeText}
						onChange={(value) => setAttributes({ beforeText: value })}
						help={__("The screen reader text to output before the button text.")}
					/>
				</PanelRow>
				<PanelRow>
					<TextControl
						label={__("Button Text")}
						value={attributes.buttonText}
						onChange={(value) => setAttributes({ buttonText: value })}
						help={__("The button text.")}
					/>
				</PanelRow>
				<PanelRow>
					<TextControl
						label={__("a11y After Text")}
						value={attributes.afterText}
						onChange={(value) => setAttributes({ afterText: value })}
						help={__("The screen reader text to output after the button text.")}
					/>
				</PanelRow>
				<PanelRow>
					<TextControl
						label={__("Button URL")}
						value={attributes.url}
						onChange={(value) => setAttributes({ url: value })}
						help={__("The button URL.")}
					/>
				</PanelRow>
				<PanelRow>
					<ToggleControl
						label={__("Open in new window")}
						checked={attributes.target}
						onChange={(value) => setAttributes({ target: value })}
						help={__("The button target.")}
					/>
				</PanelRow>
			</PanelBody>
		</InspectorControls>
	);
}

export const edit = (properties) => {
	const { attributes } = properties;
	const { beforeText = '', buttonText = '', afterText = '' } = attributes;
	const blockProperties = useBlockProps();
	blockProperties.className += " button-admin-custom";
	const beforeTextOutput = beforeText !== '' ? beforeText + ' ' : '';
	const buttonTextOutput = buttonText !== '' ? buttonText + ' ' : '';
	const afterTextOutput = afterText !== '' ? ' ' + afterText : '';

	return (
		<>
			{EditorControls(properties)}
			<a {...blockProperties} href="javascript:void(0)">
				<span className="before-text screen-reader-text">{beforeTextOutput}</span>
				<span className="text">{buttonTextOutput}</span>
				<span className="after-text screen-reader-text">{afterTextOutput}</span>
			</a>
		</>
	);
}
