import { useBlockProps, InnerBlocks } from '@wordpress/block-editor';
import React from 'react';

const allowedBlocks = [
	'core/columns',
	'core/column',
	'core/paragraph',
	'core/post-date',
	'kdc/kdc-social-share',
];

const blockTemplate = [
	['core/columns', {isStackedOnMobile: false, columns: 2}, [
		['core/column', {width: "50%"}, [
			['core/paragraph', { "className": "progress-bar--heading" }],
			['core/post-date', {}],
		]],
		['core/column', {width: "50%", className: "social-share-col"}, [
			['kdc/kdc-social-share', {"printText":"Print Page"}],
		]],
	]],
];

export const edit = () => {
	const blockProperties = useBlockProps(); // NOSONAR

	return (
		<section {...blockProperties}>
			<InnerBlocks allowedBlocks={allowedBlocks} template={blockTemplate} />
		</section>
	);
};
