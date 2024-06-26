import { useBlockProps } from "@wordpress/block-editor";
import React from "react";

export const save = (properties) => {
	const {attributes} = properties;
	const {beforeText = '', buttonText = '', url='', target, afterText = ''} = attributes;
	const blockProperties = useBlockProps.save();

	const beforeTextOutput = beforeText !== '' ? `${beforeText} ` : '';
	const buttonTextOutput = buttonText !== '' ? buttonText : '';
	const buttonUrlOutput  = url !== '' ? url : '#';
	const afterTextOutput  = afterText !== '' ? ` ${afterText}` : '';

	blockProperties.className += " button";

	return (
		<a {...blockProperties} href={buttonUrlOutput} rel="noopener noreferrer" target={target ? "_blank" : "_self"}>
			<span className="before-text screen-reader-text">{beforeTextOutput}</span>
			<span className="text">{buttonTextOutput}</span>
			<span className="after-text screen-reader-text">{afterTextOutput}</span>
		</a>
	);
}
