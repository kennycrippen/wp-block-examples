import { useBlockProps } from "@wordpress/block-editor";
import Classes from "./classes";

export const save = ( { attributes } ) => {
	const blockProperties = useBlockProps.save();
	const { listStyleType = 'unstyled' } = attributes;
	
	const listStyleElement = 'numbered' === listStyleType ? <ol className="toc-list numbered"></ol> : <ul className="toc-list"></ul>;
	const unstyledClass    = 'unstyled' === listStyleType ? 'unstyled-list' : '';

	blockProperties.className = Classes.fromMany(
		[blockProperties.className ?? '', unstyledClass]
	).toString();

	return (
		<nav {...blockProperties}>
			{listStyleElement}
		</nav>
	);
}
