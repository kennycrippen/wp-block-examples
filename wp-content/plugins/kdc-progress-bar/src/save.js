import { useBlockProps, InnerBlocks } from "@wordpress/block-editor";

export const save = ({ attributes }) => {
	const blockProperties = useBlockProps.save(); // NOSONAR
	const { layout = { type: "constrained" } } = attributes;
	const { type = 'constrained' } = layout;
	if ('constrained' === type) {
		blockProperties.className += ' is-layout-constrained';
	}

	return (
		<section {...blockProperties}>
			<InnerBlocks.Content />
			<div className="progressBar"></div>
		</section>
	);
}
