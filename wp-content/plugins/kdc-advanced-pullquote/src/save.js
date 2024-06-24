import { useBlockProps, InnerBlocks } from "@wordpress/block-editor";
import Classes from "./classes";

export const save = ({ attributes }) => {
	const { bracketColor, bracketSize, animateInView, hideQuote, quoteColor, quoteSize } = attributes;
	const blockProperties = useBlockProps.save();

	const bracketStyleClass = bracketColor ? 'is-style-bracket-color-' + bracketColor : '';
	const bracketSizeClass = bracketSize ? 'is-style-bracket-small' : '';
	const animateClass = animateInView ? 'is-style-animate' : '';
	const hideQuoteClass = hideQuote ? 'is-style-quotes-hidden' : '';
	const quoteColorClass = quoteColor ? 'is-style-quotes-color-' + quoteColor : '';
	const quoteSizeClass = quoteSize ? 'is-style-quotes-large' : '';
	const classes = Classes.fromMany(
		[blockProperties.className ?? '', bracketStyleClass, quoteColorClass, quoteSizeClass, bracketSizeClass, animateClass, hideQuoteClass]
	);

	blockProperties.className = classes.toString();

	return (
		<figure {...blockProperties}>
			<InnerBlocks.Content />
		</figure>
	);
}
