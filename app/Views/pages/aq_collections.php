<?= $this->include('templates/aq_header') ?>

<section class="aq-collection-hero">
	<div class="aq-container aq-collection-hero-inner">
		<span class="aq-kicker">MEMBERS ONLY</span>
		<h1 class="aq-collection-title">
			100 DAYS IN METRO MANILA:
			<span>THE GALLERY</span>
		</h1>
		<p class="aq-collection-sub">
			These are all the creative assets used in the game — characters, enemies, and environments.
		</p>
	</div>
</section>

<section class="aq-collection-section aq-collection-characters">
	<div class="aq-container">
		<h2 class="aq-collection-heading">CHARACTERS INFORMATION:</h2>
		<div class="aq-carousel" data-carousel="characters"></div>
	</div>
</section>

<section class="aq-collection-section aq-collection-enemies">
	<div class="aq-container">
		<h2 class="aq-collection-heading">ENEMIES INFORMATION:</h2>
		<div class="aq-carousel" data-carousel="enemies"></div>
	</div>
</section>

<section class="aq-collection-section aq-collection-environments">
	<div class="aq-container">
		<h2 class="aq-collection-heading aq-collection-heading-center">ENVIRONMENTS</h2>
		<div class="aq-environments" data-environments></div>
	</div>
</section>

<script>
	const characters = [
		{
			id: 1,
			name: 'EBA',
			role: 'The Ex-Deity Protagonist',
			description:
				"Once a minor deity of nature, Eba was cast down into a devastated Metro Manila by Bathala, the God of All, as punishment for defying divine order. Now mortal and stripped of her powers, she must restore the city's shattered ecosystems within 100 days to earn back her divinity. Eba is resourceful, determined, and deeply connected to the natural world — even when it is dying around her.",
			image: 'https://images.unsplash.com/photo-1687089693186-134e4b0cb30b?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&w=400',
		},
		{
			id: 2,
			name: 'BATHALA',
			role: 'God of All',
			description:
				"The supreme deity of the cosmos and the one who cast Eba into the mortal realm as punishment. Bathala watches from above with silent, impartial judgment — neither a villain nor an ally. He will only restore Eba 's divinity if she can truly prove her worth by healing the land she once took for granted. His presence looms over every moment of the journey.",
			image: 'https://images.unsplash.com/photo-1543683190-09941686e468?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&w=400',
		},
		{
			id: 3,
			name: 'ATO',
			role: 'The Elder Spirit Guide',
			description:
				"An ancient elemental spirit bound to the ruins of Metro Manila, Ato remembers the city before the great pollution. He serves as Kaya's guide, sharing forgotten knowledge of the city's ecosystems and helping her understand the depth of the environmental devastation. Wise but weathered, Ato carries the grief of watching humanity destroy what the gods created.",
			image: 'https://images.unsplash.com/photo-1569142916960-885f868d6123?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&w=400',
		},
	];

	const enemies = [
		{
			id: 1,
			name: 'USOK',
			location: 'Stage 1: Smog District',
			description:
				'A creature born entirely from accumulated industrial smoke and vehicular exhaust. Usok roams the thick smog-choked streets of the Smog District, suffocating anything that dares breathe clean air. It moves like vapor — hard to pin down, harder to destroy. Represents the legacy of unregulated industry and environmental neglect in urban areas.',
			image: 'https://images.unsplash.com/photo-1569142916960-885f868d6123?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&w=400',
		},
		{
			id: 2,
			name: 'KALAWANG',
			location: 'Stage 2: Toxic Waterway',
			description:
				'An aquatic monstrosity dwelling in the poisoned depths of the Toxic Waterway. Formed from rust, corroded metal, and chemical waste, Kalawang attacks anything that threatens its contaminated domain. Its body seeps toxic sludge that withers vegetation and poisons water sources. A direct manifestation of decades of industrial dumping and sewage overflow into the Pasig River.',
			image: 'https://images.unsplash.com/photo-1547221611-e3d762a99234?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&w=400',
		},
		{
			id: 3,
			name: 'BASURA',
			location: 'Stage 3: Waste Grounds',
			description:
				'A colossal entity assembled from mountains of discarded waste — plastic, metal, organic rot, and toxic chemicals all fused into a single shambling horror. Basura guards the Waste Grounds, fiercely protecting the mountains of trash it was born from. It symbolizes humanity\'s reckless waste disposal habits and the consequences of treating the environment as an endless dumping ground.',
			image: 'https://images.unsplash.com/photo-1762805543693-5aaa00fadc28?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&w=400',
		},
		{
			id: 4,
			name: 'DILIM',
			location: 'Stage 4: Heart of Manila',
			description:
				"The final and most powerful enemy — Dilim is born from the collective, centuries-long neglect of Metro Manila's entire ecosystem. It is darkness given form: an entity that absorbs all pollution, all suffering, and all despair from the ruined city. Dilim represents the ultimate cost of environmental apathy and serves as the final challenge Kaya must overcome to restore the city and reclaim her divinity.",
			image: 'https://images.unsplash.com/photo-1543811303-5f6310068938?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&w=400',
		},
	];

	const environments = [
		{
			id: 1,
			stage: 'STAGE 1: SMOG DISTRICT',
			subtitle: 'Inspired by Tondo, Manila',
			description:
				'The Smog District is a suffocating maze of makeshift factories, exhaust-belching vehicles, and industrial smokestacks. Inspired by the heavily industrialized streets of Tondo, every breath here is a struggle. Smog hangs so thick it blots out the sky, and the air quality is lethal to anyone without protection. Kaya must clear the pollution sources and restore breathable air to the district.',
			image: 'https://images.unsplash.com/photo-1569142916960-885f868d6123?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&w=700',
		},
		{
			id: 2,
			stage: 'STAGE 2: TOXIC WATERWAY',
			subtitle: 'Inspired by the Pasig River',
			description:
				"Once the lifeline of Metro Manila, the Toxic Waterway has been reduced to a festering channel of industrial chemicals, raw sewage, and floating waste. Inspired by the heavily polluted Pasig River, this stage challenges Kaya to purify the water and restore its ecosystem. Aquatic monsters lurk beneath the surface, and the banks are lined with the remains of communities that once thrived here.",
			image: 'https://images.unsplash.com/photo-1547221611-e3d762a99234?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&w=700',
		},
		{
			id: 3,
			stage: 'STAGE 3: WASTE GROUNDS',
			subtitle: 'Inspired by Sampaloc, Manila',
			description:
				'The Waste Grounds are a sprawling wasteland of discarded refuse — mountains of plastic, corroded metal, and toxic sludge stretch as far as the eye can see. Inspired by the urban waste crisis in Sampaloc, this labyrinthine environment is teeming with pollution creatures and environmental hazards. Kaya must navigate the treacherous terrain, clean the land, and confront what humanity has left behind.',
			image: 'https://images.unsplash.com/photo-1762805543693-5aaa00fadc28?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&w=700',
		},
		{
			id: 4,
			stage: 'STAGE 4: HEART OF MANILA',
			subtitle: 'The Final Stage',
			description:
				"The Heart of Manila is where all pollution converges — the epicenter of the city's ruin. Once a vibrant urban core, it has been consumed by decay, despair, and the darkness born from a century of neglect. This is Kaya's final challenge: defeat Dilim, the ultimate manifestation of environmental apathy, and restore the city's heart. Success here means redemption. Failure means the city — and Kaya's divinity — are lost forever.",
			image: 'https://images.unsplash.com/photo-1543811303-5f6310068938?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&w=700',
		},
	];

	const createDots = (length, activeIndex) =>
		Array.from({ length }).map((_, i) =>
			`<button class="aq-carousel-dot ${i === activeIndex ? 'active' : ''}" data-index="${i}" aria-label="Go to slide ${i + 1}"></button>`
		).join('');

	const renderCarousel = (root, items, accentBg) => {
		let index = 0;
		const render = () => {
			const current = items[index];
			const subtitle = current.role || current.location || '';
			root.innerHTML = `
				<div class="aq-carousel-shell" style="background:${accentBg}">
					<button class="aq-carousel-arrow" data-dir="prev" aria-label="Previous">
						<i class="bi bi-chevron-left"></i>
					</button>
					<button class="aq-carousel-arrow" data-dir="next" aria-label="Next">
						<i class="bi bi-chevron-right"></i>
					</button>
					<div class="aq-carousel-content">
						<div class="aq-carousel-info">
							<div class="aq-carousel-portrait">
								<img src="${current.image}" alt="${current.name}">
							</div>
							<div class="aq-carousel-text">
								<h3>${current.name}</h3>
								<p class="aq-carousel-subtitle">${subtitle}</p>
								<p class="aq-carousel-description">${current.description}</p>
							</div>
						</div>
						<div class="aq-carousel-turnaround">
							<p class="aq-carousel-turnaround-title">TURN AROUND</p>
							<div class="aq-carousel-turnaround-box">
								<p>2D / 3D Turnaround — Asset Placeholder</p>
							</div>
						</div>
						<div class="aq-carousel-dots">
							${createDots(items.length, index)}
						</div>
					</div>
				</div>
			`;

			root.querySelectorAll('[data-dir]').forEach((button) => {
				button.addEventListener('click', () => {
					if (button.dataset.dir === 'prev') {
						index = (index - 1 + items.length) % items.length;
					} else {
						index = (index + 1) % items.length;
					}
					render();
				});
			});

			root.querySelectorAll('[data-index]').forEach((button) => {
				button.addEventListener('click', () => {
					index = Number(button.dataset.index);
					render();
				});
			});
		};

		render();
	};

	const environmentWrapper = document.querySelector('[data-environments]');
	if (environmentWrapper) {
		environmentWrapper.innerHTML = environments.map((env, i) => `
			<div class="aq-environment ${i % 2 === 0 ? 'is-normal' : 'is-reverse'}">
				<div class="aq-environment-media">
					<div class="aq-environment-frame"></div>
					<img src="${env.image}" alt="${env.stage}">
					<div class="aq-environment-overlay"></div>
				</div>
				<div class="aq-environment-body">
					<h3>${env.stage}</h3>
					<p class="aq-environment-subtitle">${env.subtitle}</p>
					<p class="aq-environment-description">${env.description}</p>
				</div>
			</div>
		`).join('');
	}

	const charactersRoot = document.querySelector('[data-carousel="characters"]');
	const enemiesRoot = document.querySelector('[data-carousel="enemies"]');

	if (charactersRoot) renderCarousel(charactersRoot, characters, '#1A3635');
	if (enemiesRoot) renderCarousel(enemiesRoot, enemies, '#40534D');
</script>

<?= $this->include('templates/aq_footer') ?>
