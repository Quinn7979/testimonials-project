import { faker } from "@faker-js/faker";

export default function generateTestimonial() {
	return {
		feedback: faker.lorem.sentence(),
		rating: faker.number.int({ min: 0, max: 5 }),
	};
}
