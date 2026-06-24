import { registerBlockType } from '@wordpress/blocks';
import { useBlockProps, useInnerBlocksProps } from '@wordpress/block-editor';
import metadata from './block.json';

const TEMPLATE = [
	[ 'trikoli/step', { number: '01' } ],
	[ 'trikoli/step', { number: '02' } ],
	[ 'trikoli/step', { number: '03' } ],
	[ 'trikoli/step', { number: '04' } ],
];

registerBlockType( metadata.name, {
	edit() {
		const bp = useBlockProps( { className: 'tk-steps' } );
		const ip = useInnerBlocksProps( bp, { template: TEMPLATE, allowedBlocks: [ 'trikoli/step' ] } );
		return <div { ...ip } />;
	},
	save() {
		const bp = useBlockProps.save( { className: 'tk-steps' } );
		const ip = useInnerBlocksProps.save( bp );
		return <div { ...ip } />;
	},
} );
