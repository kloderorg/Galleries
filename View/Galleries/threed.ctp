<style type="text/css">
#page-wrapper {
	padding: 0;
}
</style>
<script src="https://rawgithub.com/mrdoob/three.js/master/build/three.js"></script>
<script>
	var scene = new THREE.Scene();
	var camera = new THREE.PerspectiveCamera( 75, $('#page-wrapper').width() / window.innerHeight, 0.1, 1000 );

	var renderer = new THREE.WebGLRenderer();
	renderer.setSize($('#page-wrapper').width(), window.innerHeight);
	$('#page-wrapper').append(renderer.domElement);

	var geometry = new THREE.CubeGeometry(1,1,1);
	var material = new THREE.MeshBasicMaterial( { color: 0x00ff00 } );
	var cube = new THREE.Mesh( geometry, material );
	scene.add( cube );

	camera.position.z = 5;

	function render() {
		requestAnimationFrame(render);

		cube.rotation.x += 0.1;
		cube.rotation.y += 0.1;

		renderer.render(scene, camera);
	}

	render();
</script>
