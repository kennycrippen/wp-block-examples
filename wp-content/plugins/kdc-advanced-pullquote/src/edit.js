import { useBlockProps, InnerBlocks, InspectorControls } from '@wordpress/block-editor';
import { PanelBody, PanelRow, ToggleControl, SelectControl, Flex, FlexBlock } from '@wordpress/components';
import { __ } from '@wordpress/i18n';
import React from 'react';
import Classes from "./classes";

import './editor.scss';

const blockTemplate = [
	['core/group', { className: 'advanced-pullquote-cite', tagName: 'blockquote' }, [
		['core/paragraph', {}],
	]],
	['core/group', { className: 'advanced-pullquote-cite', tagName: 'figcaption' }, [
		['core/paragraph', { placeholder: 'This group is for author attribution' }],
	]],
];

export const edit = ( { attributes, setAttributes } ) => {
	const { bracketColor, bracketSize, hideQuote, quoteColor, quoteSize } = attributes;
	const blockProperties = useBlockProps();

	const colorOptions = [
		{ label: 'Gray', value: 'gray' },
		{ label: 'Red', value: 'red' },
		{ label: 'Brown', value: 'brown' },
		{ label: 'Green', value: 'green' },
		{ label: 'Teal', value: 'teal' },
	];

	const bracketStyleClass = bracketColor ? `is-style-bracket-color-${bracketColor}` : '';
	const bracketSizeClass = bracketSize ? 'is-style-bracket-small' : '';
	const hideQuoteClass = hideQuote ? 'is-style-quotes-hidden' : '';
	const quoteColorClass = quoteColor ? `is-style-quotes-color-${quoteColor}` : '';
	const quoteSizeClass = quoteSize ? 'is-style-quotes-large' : '';
	const classes = Classes.fromMany(
		[blockProperties.className ?? '', bracketStyleClass, quoteColorClass, quoteSizeClass, bracketSizeClass, hideQuoteClass]
	);

	blockProperties.className = classes.toString();

	return (
		<>
			<InspectorControls>
				<PanelBody
					title={__('Pullquote Options', 'kdc-advanced-pullquote')}
					initialOpen={true}
				>
					<PanelRow>
						<Flex>
							<FlexBlock>
								<SelectControl
									label="Bracket Color"
									options={colorOptions}
									value={attributes.bracketColor}
									onChange={(value) => setAttributes({
										bracketColor: value
									})}
								/>
							</FlexBlock>
						</Flex>
					</PanelRow>
					<PanelRow>
						<ToggleControl
							label={__("Large / Small Bracket")}
							checked={attributes.bracketSize}
							onChange={(value) => setAttributes({bracketSize: value})}
							help={__("Toggle on for small.")}
						/>
					</PanelRow>
					<PanelRow>
						<ToggleControl
							label={__("Show / Hide Quote Mark")}
							checked={attributes.hideQuote}
							onChange={(value) => setAttributes({hideQuote: value})}
							help={__("Toggle on to hide.")}
						/>
					</PanelRow>
					<PanelRow>
						<Flex>
							<FlexBlock>
								<SelectControl
									label="Quote Color"
									options={colorOptions}
									value={attributes.quoteColor}
									onChange={(value) => setAttributes({
										quoteColor: value
									})}
								/>
							</FlexBlock>
						</Flex>
					</PanelRow>
					<PanelRow>
						<ToggleControl
							label={__("Small / Large Quote")}
							checked={attributes.quoteSize}
							onChange={(value) => setAttributes({quoteSize: value})}
							help={__("Toggle on for large.")}
						/>
					</PanelRow>
					<PanelRow>
						<ToggleControl
							label={__("Animate Opacity")}
							checked={attributes.animateInView}
							onChange={(value) => setAttributes({animateInView: value})}
							help={__("Fade the pullquote in when visible.")}
						/>
					</PanelRow>
				</PanelBody>
			</InspectorControls>
			<figure {...blockProperties}>
				<InnerBlocks template={blockTemplate} />
			</figure>
		</>
	);
};
